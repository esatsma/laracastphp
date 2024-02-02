@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/50?u={{ auth()->id() }}" alt="avatar" class="rounded-full mr-4" />
                <h2>Participate in the discussion</h2>
            </header>

            <div class="mt-4">
                <textarea name="body" class="w-full rounded-xl p-2 text-small" cols="30" rows="5" placeholder="Leave your message" required></textarea>
                @error('body')
                <span class="text-xs red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-4 rounded-full hover:bg-blue-700">Post</button>
            </div>
        </form>
    </x-panel>

@else
    <x-panel>
        <p> Please <a href="/login" class="underline underline-offset-8 hover:no-underline">login</a> in order to take part in the discussion</p>
    </x-panel>
@endauth
