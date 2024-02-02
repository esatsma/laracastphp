<x-panel>
    <article class="flex flex-row justify-between">
        <div class="mr-4 flex-shrink-0">
            <img src="https://i.pravatar.cc/50?u={{ $comment->id }}" alt="avatar" class="rounded-xl" />
        </div>
        <div class="flex-grow">
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">{{ $comment->created_at->format('F j, Y, g:i a') }}</time></p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
