@extends('general.top')

@section('title', 'CREER PASSAGE INOFFENSIF')

@section('content')


<div class="container-fluid px-4">
    <div class="top-menu">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('passage_inoffensifs.index') }}">Voir liste des passages ino</a>
        </button>
    </div>
    <h2 class="mb-4 text-center">📜 Créer un passage inoffensif</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('passage_inoffensifs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="date_entree" class="form-label">Date d'entrée</label>
          <input type="date" name="date_entree" id="date_entree" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="date_sortie" class="form-label">Date de sortie</label>
          <input type="date" name="date_sortie" id="date_sortie" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="navire" class="form-label">Navire</label>
          <input type="text" name="navire" id="navire" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
     </form>

</div>
@endsection