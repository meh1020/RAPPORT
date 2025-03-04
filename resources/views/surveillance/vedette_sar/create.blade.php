@extends('general.top')

@section('title', 'LISTES MADA')

@section('content')
<div class="container-fluid px-4">
    <div class="top-menu">
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('vedette_sar.create') }}">Créer VEDETTE SAR</a>
        </button>
        <button class="btn btn-secondary">
            <a class="text-decoration-none text-white" href="{{ route('vedette_sar.index') }}">Liste VEDETTE SAR</a>
        </button>
    </div>
    <h2 class="mb-4 text-center">📜 Créer un donné VEDETTE SAR</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ url('/vedette_sar/store') }}" method="POST">
        @csrf
        
        {{-- UNITE SAR et TOTAL INTERVENTIONS --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="unite_sar" class="form-label">UNITE SAR :</label>
                <input type="number" name="unite_sar" id="unite_sar" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="total_interventions" class="form-label">TOTAL INTERVENTIONS :</label>
                <input type="number" name="total_interventions" id="total_interventions" class="form-control">
            </div>
        </div>

        {{-- TOTAL POB et TOTAL SURVIVANTS --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="total_pob" class="form-label">TOTAL POB :</label>
                <input type="number" name="total_pob" id="total_pob" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="total_survivants" class="form-label">TOTAL SURVIVANTS :</label>
                <input type="number" name="total_survivants" id="total_survivants" class="form-control">
            </div>
        </div>

        {{-- TOTAL MORTS et TOTAL DISPARUS --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="total_morts" class="form-label">TOTAL MORTS :</label>
                <input type="number" name="total_morts" id="total_morts" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="total_disparus" class="form-label">TOTAL DISPARUS :</label>
                <input type="number" name="total_disparus" id="total_disparus" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
@endsection
