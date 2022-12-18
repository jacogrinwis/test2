<x-base-layout>

    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            {{-- <h2 class="text-2xl font-bold dark:text-white">Add Product</h2> --}}
            @if (Auth::check())
                <a href="{{ route('posts.create') }}" class="text-blue-400">Create</a>
            @else
                <a href="{{ route('users.show') }}" class="text-blue-400">Login</a>
            @endif
        </div>







        <section class="dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blog</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-2">
                    @foreach ($posts as $post)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                {{ $post->category->name }}
                            </a>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 255) }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                                <span class="font-medium dark:text-white">
                                    {{ $post->user->name }}
                                </span>
                            </div>
                            <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
          </section>







        {{-- @foreach ($posts as $post) --}}
            {{-- <section class="mb-6 py-2 px-4 bg-gray-800 rounded-lg relative">
                <header class="flex justify-between ">
                    <a href="{{ route('posts.show', $post) }}">
                        <h3 class="text-xl font-bold dark:text-white">{{ $post->title }}</h3>
                    </a>
                    <div class="flex gap-2 justify-end">
                        <a href="{{ route('posts.edit', $post) }}"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2.5 py-0.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="confirm('Are you sure you want to delete this user?')" type="submit"
                                class="px-2.5 py-0.5 bg-red-900 dark:bg-red-400 text-xs font-semibold text-white rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                </header>
                <p>
                    <a href="#" class="text-xs">{{ $post->user->name }}</a>
                    <span class="text-xs">{{ $post->created_at->diffForHumans() }}</span>
                </p>
                <div class="mb-2">
                    {{ $post->body }}

                </div>
                <div>
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        {{ $post->category->name }}
                    </span>
                    @foreach ($post->tags as $tag)
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>

            </section> --}}



            {{-- <article class="mb-6 p-4 bg-gray-800 rounded-lg relative group">
                <header>
                    <a href="{{ route('posts.show', $post) }}">
                        <h4 class="text-2xl font-bold mb-2">{{ $post->title }}</h4>
                    </a>
                    <div class="flex gap-4 text-sm text-gray-300">
                        <span>Posted on {{ $post->created_at->diffForHumans() }}</span>
                        <span>by <a
                            href="#" class="text-gray-100">{{ $post->user->name }}</a></span>
                    </div>
                </header>
                <main class="py-4">
                    <p>{{ $post->body }}</p>
                </main>
                <footer>
                    <div>
                        @foreach ($post->tags as $tag)
                            <a href=""
                                class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                        <span
                            class="float-right bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                            {{ $post->category->name }}
                        </span>
                    </div>
                </footer>
                <div class="absolute top-4 right-4 flex gap-2 invisible group-hover:visible">
                    <a href="{{ route('posts.edit', $post) }}"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-2.5 py-0.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirm('Are you sure you want to delete this user?')" type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-sm px-2.5 py-0.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </button>
                    </form>
                </div>
            </article>
        @endforeach --}}

    </div>

</x-base-layout>
