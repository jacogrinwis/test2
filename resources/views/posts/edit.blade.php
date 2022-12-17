<x-base-layout>
    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Edit Product</h2>
        </div>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @method('PUT')

            <x-posts.form :post=$post :tags=$tags :categories=$categories />

        </form>

    </div>

</x-base-layout>
