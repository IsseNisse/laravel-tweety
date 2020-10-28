<div class="border border-blue-400 rounded-2xl px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea 
            name="body" 
            class="w-full" 
            placeholder="Whats up doc?" 
            required>
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2" src="{{ auth()->user()->avatar }}" alt="avatar" width="50" height="50">

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-2xl shadow px-10 text-sm text-white h-10">
                Publish
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>