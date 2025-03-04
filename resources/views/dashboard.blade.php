
@extends('general.top')

@section('title', 'DASHBOARD')

@section('content')

<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #4CAF50; color: white;">
                <div class="inner">
                    <h3>{{ $avurnavCount }}</h3>
                    <p>Nombre d'Avurnav</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('avurnav.index') }}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #FF9800; color: white;">
                <div class="inner">
                    <h3>{{ $pollutionCount }}</h3>
                    <p>Nombre de Pollutions</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('pollutions.index') }}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #F44336; color: white;">
                <div class="inner">
                    <h3>{{ $sitrepCount }}</h3>
                    <p>Nombre de Sitrep</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('sitreps.index') }}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #2196F3; color: white;">
                <div class="inner">
                    <h3>{{ $bilanSarCount }}</h3>
                    <p>Nombre de BilanSar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('bilan_sars.index') }}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #4CAF50; color: white;">
                    <h5>Répartition des Types d'Événements</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartTypes"></canvas>
                    <button class="btn btn-success mt-2" onclick="downloadChart('chartTypes', 'types_evenements.png')">Télécharger</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5>Répartition des Causes d'Événements</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartCauses"></canvas>
                    <button class="btn btn-primary mt-2" onclick="downloadChart('chartCauses', 'causes_evenements.png')">Télécharger</button>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h5>Répartition des Bilans SAR par Région</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartRegions"></canvas>
                    <button class="btn btn-warning mt-2" onclick="downloadChart('chartRegions', 'bilan_sar_regions.png')">Télécharger</button>
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h5>Statistiques des Bilans SAR</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartBilanStats"></canvas>
                    <button class="btn btn-danger mt-2" onclick="downloadChart('chartBilanStats', 'bilan_sar_stats.png')">Télécharger</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5>Nombre d'entrées par zone</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartZones"></canvas>
                    <button class="btn btn-info mt-2" onclick="downloadChart('chartZones', 'zones_count.png')">Télécharger</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5>Répartition des navires par Flag</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartFlags" width="400" height="300"></canvas>
                    <button class="btn btn-secondary mt-2" onclick="downloadChart('chartFlags', 'flags_distribution.png')">Télécharger</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5>Répartition des types de navires</h5>
                </div>
                <div class="card-body">
                    <canvas id="chartShipTypes" width="400" height="300"></canvas>
                    <button class="btn btn-secondary mt-2" onclick="downloadChart('chartShipTypes', 'ship_types_distribution.png')">
                        Télécharger
                    </button>
                </div>
            </div>    
        </div>
    
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5>Graphique Cabotage</h5>
                </div>
                <div class="card-body">
                    <canvas id="cabotageChart" width="400" height="300"></canvas>
                    <button class="btn btn-secondary mt-2" onclick="downloadChart('cabotageChart', 'cabotage_graph.png')">
                        Télécharger
                    </button>
                </div>
            </div>
        </div>
    
    
</div>


{{-- <script> --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function downloadChart(chartId, filename) {
        const canvas = document.getElementById(chartId);
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = filename;
        link.click();
    }

    const typesLabels = @json($typesData->pluck('name'));
    const typesCounts = @json($typesData->pluck('count'));
    new Chart(document.getElementById('chartTypes').getContext('2d'), {
        type: 'bar',
        data: { labels: typesLabels, datasets: [{ label: 'Nombre d\'événements', backgroundColor: '#4CAF50', data: typesCounts }] },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    const causesLabels = @json($causesData->pluck('name'));
    const causesCounts = @json($causesData->pluck('count'));
    new Chart(document.getElementById('chartCauses').getContext('2d'), {
        type: 'bar',
        data: { labels: causesLabels, datasets: [{ label: 'Nombre d\'événements', backgroundColor: '#FF9800', data: causesCounts }] },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    const regionsLabels = @json($regionsData->pluck('name'));
    const regionsCounts = @json($regionsData->pluck('count'));
    new Chart(document.getElementById('chartRegions').getContext('2d'), {
        type: 'bar',
        data: { labels: regionsLabels, datasets: [{ label: 'Nombre de bilans SAR', backgroundColor: '#FFC107', data: regionsCounts }] },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    const bilanLabels = ["POB", "Survivants", "Blessés", "Morts", "Disparus", "Evasan"];
    const bilanCounts = {!! json_encode(isset($bilanStats) ? [
    $bilanStats->pob_total ?? 0,
    $bilanStats->survivants_total ?? 0,
    $bilanStats->blesses_total ?? 0,
    $bilanStats->morts_total ?? 0,
    $bilanStats->disparus_total ?? 0,
    $bilanStats->evasan_total ?? 0
] : [0, 0, 0, 0, 0, 0]) !!};



    new Chart(document.getElementById('chartBilanStats').getContext('2d'), {
        type: 'bar',
        data: { 
            labels: bilanLabels, 
            datasets: [{ 
                label: 'Total des incidents', 
                backgroundColor: ['#4CAF50', '#2196F3', '#FF9800', '#F44336', '#9C27B0', '#795548'], 
                data: bilanCounts 
            }] 
        },
        options: { 
            responsive: true, 
            scales: { y: { beginAtZero: true } } 
        }
    });

    const zonesLabels = @json(array_keys($zoneCounts));
    const zonesCounts = @json(array_values($zoneCounts));

    new Chart(document.getElementById('chartZones').getContext('2d'), {
        type: 'bar',
        data: {
            labels: zonesLabels,
            datasets: [{
                label: "Nombre d'entrées",
                backgroundColor: '#17a2b8',
                data: zonesCounts
            }]
        },
        options: {
            responsive: true,
            scales: { y: { beginAtZero: true } }
        }
    });

    const flagLabels = @json($flagData->pluck('name'));
    const flagCounts = @json($flagData->pluck('count'));

    new Chart(document.getElementById('chartFlags').getContext('2d'), {
        type: 'bar',
        data: {
            labels: flagLabels,
            datasets: [{
                label: 'Nombre de navires',
                backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#F3FF33', '#FF33A8'],
                data: flagCounts
            }]
        },
        options: {
            responsive: true
        }
    });

    const shipTypeLabels = @json($shipTypesData->pluck('name'));
    const shipTypeCounts = @json($shipTypesData->pluck('count'));

    new Chart(document.getElementById('chartShipTypes').getContext('2d'), {
        type: 'bar',
        data: {
            labels: shipTypeLabels,
            datasets: [{
                label: 'Nombre de navires',
                backgroundColor: ['#4CAF50', '#2196F3', '#FF9800', '#F44336', '#9C27B0', '#795548'],
                data: shipTypeCounts
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });

    // Récupération des données passées depuis le contrôleur
    const cabotageData = @json($cabotageData);

    // Création des tableaux pour les labels et les valeurs
    const labels = cabotageData.map(item => item.provenance);
    const naviresData = cabotageData.map(item => item.total_navires);
    const equipageData = cabotageData.map(item => item.total_equipage);
    const passagersData = cabotageData.map(item => item.total_passagers);

    const ctx = document.getElementById('cabotageChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Navires',
                    backgroundColor: '#4CAF50',
                    data: naviresData
                },
                {
                    label: 'Equipage',
                    backgroundColor: '#FF9800',
                    data: equipageData
                },
                {
                    label: 'Passagers',
                    backgroundColor: '#2196F3',
                    data: passagersData
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Nombre'
                    }
                }
            },
            plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false,
                },
                legend: {
                    position: 'top',
                }
            }
        }
    });

    
</script>

@endsection
