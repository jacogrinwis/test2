<x-base-layout>
@foreach ($tags as $tag)
    <p><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></p>
    <ul>
        @foreach ($tag->posts as $post)
            <li class="ml-2">{{ $post->title }}</li>
        @endforeach
    </ul>
@endforeach
</x-base-layout>
