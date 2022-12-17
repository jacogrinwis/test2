<x-base-layout>

    <div class="mx-auto my-20 max-w-sm">

        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold dark:text-white">Users</h2>
        </div>

        @foreach ($users as $user)
            <section class="mb-6">
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $user->name }}</h3>
                <ul>
                    <li>{{ $user->email }}</li>
                    <li>{{ $user->address->country }}</li>
                </ul>
            </section>
        @endforeach

    </div>

</x-base-layout>
