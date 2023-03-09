@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Information sur l'étudiant</h1>
    <div>
        <div>
            <label for="nom">Nom</label>
            <p>{{ $etudiant->nom }}</p>
        </div>

        <div>
            <label for="email">Email</label>
            <p>{{ $etudiant->email }}</p>
        </div>

        <div>
            <label for="phone">Phone</label>
            <p>{{ $etudiant->phone }}</p>
        </div>

        <div>
            <label for="adresse">Adresse</label>
            <p>{{ $etudiant->adresse }}</p>
        </div>

        <div>
            <label for="ville">Ville</label>
            <p>{{ $etudiant->ville->nom }}</p>
        </div>

        <a href="{{ route('etudiant.edit', $etudiant->id) }}">Modifier</a>
    </div>
    <form class="form-delete" method="POST" action="{{ route('etudiant.destroy', $etudiant->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>


@endsection