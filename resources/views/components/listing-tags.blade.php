@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);

@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-center px-3 py-1 mr-2 text-xs text-white bg-black rounded-xl">
            <a href="/listings?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
