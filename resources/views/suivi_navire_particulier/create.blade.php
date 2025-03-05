@extends('general.top')

@section('title', 'CREER SUIVI NAVIRE PARTICULIER')

@section('content')


<div class="container-fluid px-4">
    <div class="top-menu">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('suivi_navire_particuliers.index') }}">Voir liste des navires particuliers</a>
        </button>
    </div>
    <h2 class="mb-4 text-center">📜 Créer un navire particulier</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('suivi_navire_particuliers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nom_navire" class="form-label">Nom du Navire</label>
            <input type="text" name="nom_navire" id="nom_navire" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="mmsi" class="form-label">MMSI</label>
            <input type="text" name="mmsi" id="mmsi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="observations" class="form-label">Observations</label>
            <textarea name="observations" id="observations" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

</div>
@endsection