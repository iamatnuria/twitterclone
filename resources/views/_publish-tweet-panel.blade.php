<script>
    window.onload = function(){
        document.getElementById("tweet-text").value = "";
    }
</script>

<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            style="resize: none;background-color: rgba(0, 0, 0, 0); border-color: rgba(0, 0, 0, 0); outline: none;"
            name="body" class="w-full"
            id="tweet-text"
            placeholder="What's up doc?"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2"
                 src="{{ current_user()->avatar }}"
                 alt="your avatar"
                 width="50"
                 height="50">
            <x-tweet-button></x-tweet-button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror
</div>
