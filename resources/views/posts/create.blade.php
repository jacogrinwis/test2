<x-base-layout>

    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Add Product</h2>
        </div>

        <form method="POST" action="{{ route('posts.store') }}">

            <x-posts.form :tags=$tags :categories=$categories create="true" />

        </form>

    </div>

</x-base-layout>
