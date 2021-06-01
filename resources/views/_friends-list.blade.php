<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6 sm:mt-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4'}}">
                <div>
                    <a class="flex items-center text-sm"
                       href="{{ route('profile', $user) }}">
                        <img class="rounded-full mr-2"
                             src="{{ $user->avatar }}"
                             alt=""
                             width="40"
                             height="40">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li class="p-2">There is no friends.</li>
        @endforelse
    </ul>
</div>
