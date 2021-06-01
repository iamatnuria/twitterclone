<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    // Tweet::withLikes()->get();
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, Sum(liked) likes, Sum(!liked) dislikes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id',
        );
//        SELECT * FROM tweets
//       LEFT JOIN(
//           SELECT tweet_id, Sum(liked) likes, Sum(!liked) dislikes FROM likes GROUP BY tweet_id
//    ) likes ON likes.tweet_id = tweets.id

    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isDislikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }
}
