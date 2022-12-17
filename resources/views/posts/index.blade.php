<x-base-layout>

    <div class="mx-auto my-20 max-w-sm">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Add Product</h2>
        </div>

        @foreach ($posts as $post)
            <section class="mb-6 py-2 px-4 bg-gray-800 rounded-lg">
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $post->title }}</h3>
                {{-- <p>{{ $post->user->name }}</p> --}}
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
        @endforeach

    </div>

</x-base-layout>
