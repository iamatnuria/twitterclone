<x-app>
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}">
                <div class="flex items-center mb-5">
                    <img class="rounded mr-4" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60">

                    <div>
                        <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                    </div>
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
