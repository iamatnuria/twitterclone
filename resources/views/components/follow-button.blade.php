@if (current_user()->isNot($user))
    <form method="POST" action="{{route('follow', $user->username)}}">
        @csrf
        <button type="submit"
                class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">
            {{ current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif

