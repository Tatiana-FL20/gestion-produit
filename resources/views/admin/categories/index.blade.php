@extends('layouts.app')

@section('content')
    <h1>Catégories</h1>
    <a href="{{ route('admin.categories.create') }}">Ajouter</a>
    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }} ({{ $category->slug }})
                <a href="{{ route('admin.categories.edit', $category) }}">Modifier</a>
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
