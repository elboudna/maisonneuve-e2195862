@extends('layout.app')

@section('content')
<a href="{{ route('nouvelEtudiant') }}" class="btn btn-primary mb-3">Ajouter un étudiant</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->adresse }}</td>
                <td>{{ $etudiant->phone }}</td>
                <td>{{ $etudiant->email }}</td>
                <td><a href="{{ route('etudiant.show', $etudiant->id) }}">Modifier</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection