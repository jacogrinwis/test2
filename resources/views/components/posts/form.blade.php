@csrf

<div class="flex flex-col sm:flex-row gap-6">

    <div class="sm:flex-1">

        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="title" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ old('title') }}@isset($post) {{ $post->title }} @endisset">
            @error('title')
                <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" name="slug" id="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ old('slug') }}@isset($post) {{ $post->slug }} @endisset">
            @error('slug')
                <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
            <textarea name="body" id="body"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('body') }}@isset($post) {{ $post->body }} @endisset</textarea>
            @error('body')
                <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <div class="sm:w-1/3">

        <div class="mb-6">
            <label for="categories"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
            <select id="categories" name="categories[]"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Choose a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @isset($post) @if (in_array($category->id, $post->categories->pluck('id')->toArray())) selected @endif @endisset>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="mb-6">
            <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
            @foreach ($tags as $tag)
                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input type="checkbox" name="tags" id="checkbox-item-{{ $tag->id }}"
                        value="{{ $tag->id }}"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        @isset($post) @if (in_array($tag->id, $post->tags->pluck('id')->toArray())) checked @endif @endisset>
                    <label for="checkbox-item-{{ $tag->id }}"
                        class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>
    </div>

</div>

<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    @isset($post) Update @else Submit @endisset
</button>
