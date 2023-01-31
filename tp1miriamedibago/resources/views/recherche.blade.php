<x-layout>
    <main>
        <div class="container">
            <div>
                <a href="/" class=" button btn btn-primary">Retour</a>
            </div>
            <h1 class="text-center mb-5">Liste des films</h1>
            <div class="films">
                <x-liste-films :films="$films" />
             </div>
        </div>
    </main>
</x-layout>
