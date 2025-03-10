@extends('general.top')

@section('title', 'CREER DESTINATION')

@section('content')

<div class="container-fluid px-4">

    <div class="top-menu">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('destinations.create') }}">Créer destination</a>
        </button>
        <button class="btn btn-secondary">
            <a class="text-decoration-none text-white" href="{{ route('destinations.index') }}">Liste des destinations</a>
        </button>
    </div>

    <h2 class="mb-4 text-center">Créer une Destination</h2>
    <form action="{{ route('destinations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la destination</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nouvelle destination" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    
</div>
@endsection
