<x-layout>
    <main >
        <div class="container">
            <h1 class="text-center mb-5">Liste des films</h1>
            <div class="films">
                <x-liste-films :films="$films" />
            </div>
        </div>
    </main>
</x-layout>
