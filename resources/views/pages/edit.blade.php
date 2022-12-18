<x-base-layout>
    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Edit Page</h2>
        </div>

        <form method="POST" action="{{ route('pages.update', $page->id) }}">
            @method('PUT')

            <x-pages.form :page=$page :tags=$tags :categories=$categories />

        </form>

    </div>

</x-base-layout>
