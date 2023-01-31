@props(["films"])

@forelse ($films as $film)
 <x-lien-film :film="$film" />
@empty
  <p>Aucun film à afficher</p>
@endforelse
