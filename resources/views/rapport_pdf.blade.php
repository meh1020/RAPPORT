<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rapport PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            margin: 10px;
        }
        .titre {
            font-size: 6em;
        }
        /* ---- SECTION SOMMAIRE ---- */
        .summary-container {
            margin: 40px 0;
            border: 2px solid #1F3A68;
            border-radius: 6px;
            overflow: hidden;
        }
        .summary-header {
            background-color: #1F3A68;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px;
            font-size: 18px;
            text-align: center;
        }
        .summary-content {
            padding: 20px;
        }
        .summary-content p {
            margin: 5px 0;
            line-height: 1.5;
        }
        .summary-content p strong {
            /* Les titres principaux en gras */
            text-transform: uppercase;
        }
        .ml-5 {
            padding-left: 15%;
        }
        .ml-6 {
            padding-left: 20%;
        }
        /* Conteneur général de la section SAR */
        .sar-section {
            margin: 20px 0;
            font-family: "DejaVu Sans", sans-serif;
        }
        /* Titre principal (ex. "1. EVENEMENTS SAR") */
        .sar-section h2 {
            background-color: #0F4C75;
            color: #fff;
            padding: 10px;
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
        }
        /* Sous-titre (ex. "1.1 TYPES D'INCIDENTS") */
        .sar-section h3 {
            background-color: #3282B8;
            color: #fff;
            padding: 8px;
            margin-top: 0;
            margin-left: 20px;
            font-size: 16px;
            text-transform: uppercase;
        }
        /* Paragraphe descriptif */
        .sar-section p {
            margin: 10px 0;
            font-size: 14px;
            line-height: 1.4;
        }
        /* Conteneur de la section du graphique */
        .chart-section {
            margin-top: 20px;
            text-align: center;
        }
        /* Titre au-dessus du graphique */
        .chart-section h4 {
            color: #9C27B0;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 16px;
        }
        /* Conteneur de l'image du graphique */
        .chart-image {
            max-width: 600px;
            margin: 0 auto;
        }
        /* Style de l'image du graphique */
        .chart-image img {
            width: 100%;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 5px;
        }
        /* Description/légende sous le graphique */
        .chart-desc {
            margin-top: 10px;
            text-align: left;
            width: 80%;
            margin: 10px auto 0 auto;
        }
        .chart-desc p {
            font-weight: bold;
        }
        .chart-desc ul {
            list-style: disc;
            margin-left: 20px;
            font-size: 14px;
        }
        /* Style de base du tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        /* En-tête sombre */
        table thead.table-dark {
            background-color: #343a405b;
            color: #fff;
        }
        /* Cellules du tableau */
        table th,
        table td {
            padding: 5px;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        /* Lignes avec fond alterné */
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        /* Taille du texte */
        table small,
        table th {
            font-size: 0.85em;
        }
        /* Colonne DESCRIPTION (classe .desc) */
        .desc {
            width: 200px;
        }
        /* Pour les colonnes statistiques, toutes les <th> de classe stat sauf la dernière auront une largeur de 30px */
        table thead th.stat:not(:last-child) {
            width: 30px;
        }
        .tsipika {
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        // Encodage de l'image logo en Base64
        $path = public_path('images/aaaaaaaa.jpeg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    <!-- Page de couverture -->
    <div style="text-align: center; margin-top: 100px;">
        <img src="{{ $base64 }}" alt="Logo" style="width: 150px;">
        <br>
        <h1 class="titre">RAPPORT {{ $filterResult }}<br>EQUIPE MRCC<br></h1>
    </div>
    <div style="page-break-before: always;"></div>

    <!-- Sommaire -->
    <div class="summary-container">
        <div class="summary-header">SOMMAIRE</div>
        <div class="summary-content">
            <p><strong>1. EVENEMENTS SAR</strong></p>
            <p class="ml-5">1.1. TYPES D'INCIDENTS</p>
            <p class="ml-5">1.2. CAUSES DES INCIDENTS</p>
            <p class="ml-5">1.3. LOCALISATION DES INCIDENTS</p>
            <p class="ml-5">1.4. BILAN HUMAIN</p><br>

            <p><strong>2. AVIS AUX NAVIGATEURS</strong></p><br>

            <p><strong>3. SUIVI DU TRAFIC MARITIME DANS LA ZEE DE MADAGASCAR</strong></p><br>
            <p class="ml-5">3.1. SUIVI DES NAVIRES PARTICULIERS</p><br>
            <p class="ml-5">3.2. SUIVI DES NAVIRES DANS LES MERS TERRITORIALES (PORTS INCLUS)</p>
            <p class="ml-6">3.2.1. DELIMITATION DES ZONES DE SURVEILLANCE</p>
            <p class="ml-6">3.2.2. LISTE DES NAVIRES PAR ZONE</p>
            <p class="ml-6">3.2.3. RECAPITULATIF SUIVI CABOTAGE NATIONAL</p>
            <p class="ml-6">3.2.4. RECAPITULATIF ARRIVEE NAVIRES ETRANGERS</p>
            <p class="ml-6">3.2.5. RECAPITULATIF LISTE NAVIRES DE PASSAGE INOFFENSIF</p>
            <p class="ml-5">3.3. RECAPITULATION ZEE</p><br>

            <p><strong>4. RECAPITULATIF ACTIVITES VEDETTES SAR</strong></p>
            <p><strong>5. POLLUTION</strong></p>
            <p><strong>6. AUTRES</strong></p>
        </div>
    </div>
    <div style="page-break-before: always;"></div>

    <!-- SECTION 1 : EVENEMENTS SAR -->
    <div class="sar-section">
        <h2>1. EVENEMENTS SAR</h2>
        <h3>1.1 TYPES D'INCIDENTS</h3>
        @if(isset($typesChartUrl) && isset($typesData))
        <p>
            @php $totalCount = 0; @endphp
            @foreach($typesData as $type)
                @php $totalCount += $type['count']; @endphp
            @endforeach
            Nous avons enregistré {{$totalCount}} incidents en mer durant {{ $filterResult }}.
            En effet, nous avons noté 
            @foreach($typesData as $type)
                {{ $type['count'] }} {{ $type['name'] }},
            @endforeach
        </p>
        <div class="chart-section">
            <h4>TYPE D'INCIDENTS</h4>
            <div class="chart-image">
                <img src="{{ $typesChartBase64 }}" alt="Graphique Types">
            </div>
            <div class="chart-desc">
                <p> (Cf. figure 1) type incident {{ $filterResult }}</p>
            </div>
        </div>
        @endif
    </div>
    <div class="sar-section">
        <h3>1.2 CAUSES DES INCIDENTS</h3>
        @if(isset($causesChartUrl) && isset($causesData))
        <p>
            Si on fait une analyse par rapport aux causes provoquant les incidents :
            @foreach($causesData as $cause)
                {{ $cause['name'] }},
            @endforeach
            la figure 2 nous donne un aperçu de ce qui est annoncé.
        </p>
        <div class="chart-section">
            <div class="chart-image">
                <img src="{{ $causesChartBase64 }}" alt="Graphique Causes">
            </div>
            <div class="chart-desc">
                <p> (Cf. figure 2) cause(s) incident(s) {{ $filterResult }}</p>
            </div>
        </div>
        @endif
    </div>
    <div class="sar-section">
        <h3>1.3 LOCALISATION DES INCIDENTS</h3>
        @if(isset($regionsChartUrl) && isset($regionsData))
        @php $totalCount = 0; @endphp
        @foreach($causesData as $type)
            @php $totalCount += $type['count']; @endphp
        @endforeach
        <div class="chart-section">
            <div class="chart-image">
                <img src="{{ $regionsChartBase64 }}" alt="Graphique Régions">
            </div>
            <div class="chart-desc">
                <p> (Cf. figure 3)  Localisation des incidents</p>
            </div>
            <div class="chart-desc">
                <p>Sur les {{$totalCount}} incidents enregistrés durant ce trimestre,</p>
                <ul>
                    @foreach($regionsData as $region)
                        <li>{{ $region['count'] }} incident(s) dans la region {{ $region['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
    <div class="sar-section">
        <h3>1.4 BILAN HUMAIN</h3>
        <div class="chart-section">
            <div class="chart-image">
                <img src="{{ $bilanChartBase64 }}" alt="Graphique Bilan Humain">
            </div>
            <div class="chart-desc">
                <p> (Cf. figure 4) Bilan humain {{ $filterResult }}  </p>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>DATE</th>
                        <th>NOM DU NAVIRE</th>
                        <th class="desc">DESCRIPTION DE L'EVENEMENT</th>
                        <th class="stat">POB</th>
                        <th style="width: 30px">SURVIVANTS</th>
                        <th style="width: 30px">BLESSES</th>
                        <th style="width: 30px">MORTS</th>
                        <th style="width: 30px">DISPARUS</th>
                        <th style="width: 30px">EVASAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bilans as $bilan)
                        <tr>
                            <td><small>{{ $bilan->created_at }}</small></td>
                            <td><small>{{ $bilan->nom_du_navire }}</small></td>
                            <td><small>{{ $bilan->description_de_l_evenement }}</small></td>
                            <td><small>{{ $bilan->pob }}</small></td>
                            <td><small>{{ $bilan->survivants }}</small></td>
                            <td><small>{{ $bilan->blesses }}</small></td>
                            <td><small>{{ $bilan->morts }}</small></td>
                            <td><small>{{ $bilan->disparus }}</small></td>
                            <td><small>{{ $bilan->evasan }}</small></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="chart-desc">
            <p> Tableau 1 : Bilan humain {{ $filterResult }}</p>
        </div>
        <p>
            A titre de récapitulation, le tableau 1 ci-après nous donne un aperçu du bilan 
            humain des évènements SAR de ce trimestre ainsi qu’une brève description de ceux 
            qui se sont passés pour chaque incident.
        </p>
    </div>

      <!-- SECTION 2 : AVIS AUX NAVIGATEURS (Avurnavs) -->
      <div class="sar-section">
        <h2>2. AVIS AUX NAVIGATEURS</h2>
        @if(isset($avurnavs) && $avurnavs->count() > 0)
            <p>{{ $avurnavs->count() }} avis aux navigateurs ont été lancés :</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Local</th>
                            <th>Ile</th>
                            <th>Vous signale</th>
                            <th>Navire</th>
                            <th>Caractéristiques</th>
                            <th>Zone</th>
                            <th>Dernière communication</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($avurnavs as $avurnav)
                            <tr>
                                <td>{{ $avurnav->avurnav_local }}</td>
                                <td>{{ $avurnav->ile }}</td>
                                <td>{{ $avurnav->vous_signale }}</td>
                                <td>{{ $avurnav->navire }}</td>
                                <td>{{ $avurnav->caracteristiques }}</td>
                                <td>{{ $avurnav->zone }}</td>
                                <td>{{ $avurnav->derniere_communication }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>Aucun avis aux navigateurs n'est disponible pour les filtres sélectionnés.</p>
        @endif
    </div>

    {{-- ZEE --}}
    <div class="sar-section">
        <h2>3. SUIVI DU TRAFIC MARITIME DANS LA ZEE DE MADAGASCAR</h2>
        <h3>3.1	SUIVI DES NAVIRES PARTICULIERS :</h3>
        ?????????????
        <h3>3.2 SUIVI DES NAVIRES DANS LES MERS TERRITORIALES</h3>
        <h4 style="margin-left: 35px" class="tsipika">3.2.1 DELIMITATION DES ZONES DE SURVEILLANCE</h4>

        <?php
            // Encodage de l'image zone en Base64
            $path = public_path('images/zone.png');
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        ?>
        <!-- Page de couverture -->
        <div style="text-align: center;">
            <img src="{{ $base64 }}" alt="zones" style="width: 320px;">
            <br>
        </div>

        <h4 style="margin-left: 35px" class="tsipika">3.2.2 NOMBRES DES NAVIRES PAR ZONES</h4><br>
        @if(isset($zoneChartUrl) && isset($zoneCounts))
        <div class="chart-section">
            <div class="chart-image">
                <img src="{{ $zoneChartBase64 }}" alt="Graphique Zones">
            </div>
            <div class="chart-desc">
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                @foreach($zoneCounts as $zoneName => $count)
                                    <th>{{ $zoneName }}</th>
                                @endforeach
                            </tr>
                            <tr style="color: darkblue; background-color: white;">
                                @foreach($zoneCounts as $zoneName => $count)
                                    <th> {{ $count }}</th>
                                @endforeach
                            </tr>
                        </thead>

                    </table>
                </div>
                <div class="chart-desc">
                    <p>Tableau 02 : Nombre des navires chaque la zone</p>
                </div>
            </div>
        </div>
        @endif


    </div>

    <!-- SECTION 6 : POLLUTION -->
    <div class="sar-section">
        <h2>6. POLLUTION</h2>
        @if(isset($pollutions) && $pollutions->count() > 0)
            @foreach($pollutions as $pollution)
                
                    <p><strong>Numero :</strong> {{ $pollution->numero }}</p>
                    <p><strong>Zone :</strong> {{ $pollution->zone }}</p>
                    <p><strong>Coordonnées :</strong> {{ $pollution->coordonnees }}</p>
                    <p><strong>Type de pollution :</strong> {{ $pollution->type_pollution }}</p>
                    @if($pollution->image_satellite)
                        <?php
                            $satPath = public_path('storage/' . $pollution->image_satellite);
                            $satType = pathinfo($satPath, PATHINFO_EXTENSION);
                            $satData = file_get_contents($satPath);
                            $satBase64 = 'data:image/' . $satType . ';base64,' . base64_encode($satData);
                        ?>
                        <p><strong>Image Satellite :</strong></p>
                        <img src="{{ $satBase64 }}" width="500" class="rounded mb-2">
                        <br><br>
                    @else
                        <p></span></p>
                    @endif

                    @if($pollution->images->isNotEmpty())
                        <p><strong> Image(s) :</strong></p>
                        @foreach($pollution->images as $image)
                            <?php
                                $imgPath = public_path('storage/' . $image->image_path);
                                $imgType = pathinfo($imgPath, PATHINFO_EXTENSION);
                                $imgData = file_get_contents($imgPath);
                                $imgBase64 = 'data:image/' . $imgType . ';base64,' . base64_encode($imgData);
                            ?>
                            <img src="{{ $imgBase64 }}" width="500" class="rounded mb-2">
                            <br><br>
                        @endforeach
                    @else
                        <p><span class="text-muted">Aucune autre image</span></p>
                    @endif
           
            @endforeach
        @else
            <p>Aucune donnée de pollution n'est disponible pour les filtres sélectionnés.</p>
        @endif
    </div>

    <!-- SECTION 6 : Répartition des navires par Flag -->
    @if(isset($flagChartUrl) && isset($flagData))
    <div class="chart-section">
        <h2>Répartition des navires par Flag</h2>
        <div class="chart-image">
            <img src="{{ $flagChartBase64 }}" alt="Graphique Flags">
        </div>
        <div class="chart-desc">
            <p>Liste des flags et nombre de navires :</p>
            <ul>
                @foreach($flagData as $flag)
                    <li>{{ $flag['name'] }} : {{ $flag['count'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</body>
</html>
