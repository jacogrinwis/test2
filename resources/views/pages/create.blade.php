<x-base-layout>

    <div class="mx-auto my-20 max-w-4xl">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Create a Page</h2>
            {{ auth()->user()->name }}
        </div>

        <form method="POST" action="{{ route('pages.store') }}">

            <x-pages.form :tags=$tags :categories=$categories create="true" />

        </form>

    </div>

</x-base-layout>
