<ul class="mb-4">
    <li><a class="font-bold text-sm lg:text-lg mb-4 inline lg:block "
           href="{{route('home')}}">Home</a></li>
    <li><a class="font-bold text-sm lg:text-lg mb-4 inline lg:block " href="/explore">Explore</a></li>
    <li><a class="font-bold text-sm lg:text-lg mb-4 inline lg:block "
           href="{{ route('profile', current_user()) }}">Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-white transition hover:underline lg:text-lg rounded bg-blue-500 hover:bg-blue-600 px-2 py-1 lg:px-4 lg:py-2">Logout</button>
        </form>
    </li>
</ul>
