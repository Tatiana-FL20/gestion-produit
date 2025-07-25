@extends('layouts.app')

@section('content')
    <h1>Ajouter une catégorie</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom" required>
        <button type="submit">Créer</button>
    </form>
@endsection
