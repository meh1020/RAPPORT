@extends('general.top')

@section('title', 'LISTE DES DESTINATIONS')

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

    <h2 class="mb-4 text-center">📜 Liste des destinations</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($destinations as $destination)
            <tr>
                <td><small>{{ $destination->id }}</small></td>
                <td><small>{{ $destination->name }}</small></td>
                <td>
                    <form action="{{ route('destinations.destroy', $destination) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $destinations->links() }}
    </div>
</div>
@endsection
