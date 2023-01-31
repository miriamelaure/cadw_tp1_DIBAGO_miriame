@props(['film'])

<p><a href="/films/{{ $film->id }}">
    {{ $film->title }}
</a></p>
