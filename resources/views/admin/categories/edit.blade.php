@extends('layouts.app')

@section('content')
    <h1>Modifier la catégorie</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
