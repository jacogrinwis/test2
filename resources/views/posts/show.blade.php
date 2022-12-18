<x-base-layout>

    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">{{ $post->title }}</h2>
        </div>
        <section class="mb-6 py-2 px-4 bg-gray-800 rounded-lg">
            <p class="mb-2">{{ $post->body }}</p>
            @foreach ($post->categories as $category)
                <span class="mb-4 text-xs text-blue-200">{{ $category->name }}</span>
            @endforeach
            <ul>
                @foreach ($post->tags as $tag)
                    <li class="text-xs italic text-gray-400">{{ $tag->name }}</li>
                @endforeach
            </ul>
            <a href="{{ route('posts.edit', $post) }}" class="text-green-400">Edit</a>
        </section>

    </div>

</x-base-layout>
