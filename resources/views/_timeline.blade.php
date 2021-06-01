<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">There is no tweets yet!</p>
    @endforelse


            <div class="links p-4">{{ $tweets->links() }}</div>


</div>
