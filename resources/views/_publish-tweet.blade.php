<div class="border border-blue-400 rounded-lg py-4 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea  name="body" id="" class="w-full" placeholder="What is on your mind?"></textarea>
        <hr class="mb-4">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}" width="50px" height="50px" alt="your avatar" class="rounded-full mr-2">

            <button class="rounded-lg bg-blue-500 shadow py-2 px-2 text-white" type="submit">Post a tweet
            </button>
        </footer>

    </form>
    <div>
        @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
        @enderror
    </div>
</div>
