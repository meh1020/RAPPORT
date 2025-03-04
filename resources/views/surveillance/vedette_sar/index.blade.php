@extends('general.top')

@section('title', 'LISTE DES CABOTAGES')

@section('content')
<div class="container-fluid px-4">
    <div class="top-menu mb-4 d-flex gap-2">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('vedette_sar.create') }}">Créer VEDETTE SAR</a>
        </button>
        <button class="btn btn-secondary">
            <a class="text-decoration-none text-white" href="{{ route('vedette_sar.index') }}">Liste VEDETTE SAR</a>
        </button>
    </div>

    <h2 class="mb-4 text-center">⛵ Liste des VEDETTE SAR</h2>

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
                    <th>UNITE SAR</th>
                    <th>TOTAL INTERVENTIONS</th>
                    <th>TOTAL POB</th>
                    <th>TOTAL SURVIVANTS</th>
                    <th>TOTAL MORTS</th>
                    <th>TOTAL DISPARUS</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($vedettes as $vedette)
                    <tr>
                        <td><small>{{ $vedette->id }}</small></td>
                        <td><small>{{ $vedette->unite_sar }}</small></td>
                        <td><small>{{ $vedette->total_interventions }}</small></td>
                        <td><small>{{ $vedette->total_pob }}</small></td>
                        <td><small>{{ $vedette->total_survivants }}</small></td>
                        <td><small>{{ $vedette->total_morts }}</small></td>
                        <td><small>{{ $vedette->total_disparus }}</small></td>
                        <td>
                            <div class="d-flex gap-2">
                                <form action="{{ route('vedette_sar.destroy', $vedette->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élément ?');">
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
                        <td colspan="8" class="text-center text-muted">Aucune donnée enregistrée.</td>
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
