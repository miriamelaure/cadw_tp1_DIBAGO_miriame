<x-layout>
    <x-slot name="titre">
        {{ $film->title }}
    </x-slot>

    <main >
        <div class=" container d-flex mt-10">
            <div>
                <div><a href="/" class=" button btn btn-primary">Retour</a></div>
                <div><x-film.poster-path :posterPath="$film->poster_path" /></div>
            </div>
            <div>
                <x-film.title :title="$film->title" />
                <x-film.overview :overview="$film->overview" />
                <x-film.release-date :releaseDate="$film->release_date" />
                <x-film.vote-average-count :voteAverage="$film->vote_average" :voteCount="$film->vote_count" />
            </div>
        </div>
    </main>
</x-layout>
