<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2" src="/images/default-profile-banner.jpg" alt="">

            <img
                class=" rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 left-1/2"
                src="{{ $user->avatar }}"
                alt=""
                width="150">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 style="max-width: 270px;" class="font-bold text-2xl mb-1">{{ $user->name }}</h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}"
                   class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2">
                    Edit Profile
                </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Alias aspernatur deserunt, error
            esse
            eveniet explicabo harum id incidunt itaque magnam minima modi
            mollitia natus non nostrum numquam
            perspiciatis quae quaerat quas quasi rem, repellat rerum sapiente
            temporibus tenetur, totam voluptates.</p>


    </header>


    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>


