@extends('general.top')

@section('title', 'LISTES MADA')

@section('content')
<div class="container-fluid px-4">
    <div class="top-menu">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('cabotage.create') }}">Créer Cabotage</a>
        </button>
        <button class="btn btn-secondary">
            <a class="text-decoration-none text-white" href="{{ route('cabotage.index') }}">Liste Cabotage</a>
        </button>
    </div>
    <h2 class="mb-4 text-center">📜 Créer un donné Cabotage</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ url('/cabotage/store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <!-- DATE -->
            <div class="col-md-6">
                <label for="date" class="form-label">DATE :</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <!-- PROVENANCE -->
            <div class="col-md-6">
                <label for="provenance" class="form-label">PROVENANCE :</label>
                <input type="text" name="provenance" id="provenance" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <!-- NAVIRES -->
            <div class="col-md-6">
                <label for="navires" class="form-label">NAVIRES :</label>
                <input type="text" name="navires" id="navires" class="form-control">
            </div>
            <!-- EQUIPAGE -->
            <div class="col-md-6">
                <label for="equipage" class="form-label">EQUIPAGE :</label>
                <input type="number" name="equipage" id="equipage" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <!-- PASSAGERS -->
            <div class="col-md-6">
                <label for="passagers" class="form-label">PASSAGERS :</label>
                <input type="number" name="passagers" id="passagers" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
@endsection
