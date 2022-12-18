<x-base-layout>
    {{ $tag->name }}
    <ul>
        @foreach ($tag->posts as $post)
        <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</x-base-layout>
