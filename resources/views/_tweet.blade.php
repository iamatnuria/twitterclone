<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0 transition transform hover:-translate-y-0.5">
        <a href="{{ $tweet->user->path() }}">
            <img
                class="rounded-full mr-2"
                src="{{ $tweet->user->avatar }}"
                alt=""
                width="50"
                height="50"></a>
    </div>

    <div>
        <h5 class="flex font-bold mb-4 transition transform hover:-translate-y-0.5">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>

            <p class="text-gray-400 font-light ml-2 text-sm align-middle">{{ $tweet->created_at->diffForHumans() }}</p>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet"></x-like-buttons>
    </div>
</div>
