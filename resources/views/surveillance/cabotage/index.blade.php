@extends('general.top')

@section('title', 'LISTE DES CABOTAGES')

@section('content')
<div class="container-fluid px-4">
    <div class="top-menu mb-4 d-flex gap-2">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('cabotage.create') }}">Créer CABOTAGE</a>
        </button>
        <button class="btn btn-secondary">
            <a class="text-decoration-none text-white" href="{{ route('cabotage.index') }}">Liste CABOTAGE</a>
        </button>
    </div>

    <h2 class="mb-4 text-center">🚢 Liste des Cabotages</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Provenance</th>
                    <th>Navires</th>
                    <th>Équipage</th>
                    <th>Passagers</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cabotages as $cabotage)
                    <tr>
                        <td><small>{{ $cabotage->id }}</small></td>
                        <td><small>{{ $cabotage->date }}</small></td>
                        <td><small>{{ $cabotage->provenance }}</small></td>
                        <td><small>{{ $cabotage->navires }}</small></td>
                        <td><small>{{ $cabotage->equipage }}</small></td>
                        <td><small>{{ $cabotage->passagers }}</small></td>
                        <td>
                            <div class="d-flex gap-2">
                                <form action="{{ route('cabotage.destroy', $cabotage->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élément ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Aucune donnée enregistrée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
</style>
@endsection
