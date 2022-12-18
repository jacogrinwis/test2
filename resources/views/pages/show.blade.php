<x-base-layout>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert relative group">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="{{ route('users.show', $page->user->name) }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $page->user->name }}</a>
                                {{-- <p class="text-base font-light text-gray-500 dark:text-gray-400">Graphic Designer,
                                    educator & CEO Flowbite</p> --}}
                                <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="{{ $page->created_at }}"
                                        title="{{ $page->created_at->diffForHumans() }}">{{ $page->created_at->diffForHumans() }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $page->title }}</h1>
                </header>
                <main class="mb-6">
                    <p>{{ $page->body }}</p>
                </main>
                <footer>
                    @foreach ($page->categories as $category)
                        <a href="{{ route('categories.show', $category->name) }}"
                            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-700 dark:text-blue-300">
                            {{ $category->name }}
                        </a>
                    @endforeach
                    @foreach ($page->tags as $tag)
                        <a href="{{ route('tags.show', $tag->name) }}"
                            class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </footer>
                <div class="absolute top-4 right-4 flex gap-2 invisible group-hover:visible">
                    <a href="{{ route('pages.edit', $page) }}"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-2.5 py-0.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                    <form action="{{ route('pages.destroy', $page) }}" method="page">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirm('Are you sure you want to delete this user?')" type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-sm px-2.5 py-0.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </button>
                    </form>
                </div>
            </article>
        </div>
    </main>

</x-base-layout>
