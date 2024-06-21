@extends('layouts.app')

@section('pageTitle', 'Tableau de bord')

@section('content')
    <div id="mapid-home"></div>
    @if($user_role->name === 'admin')
        <script>
            var map = L.map('mapid-home').setView([46.603354, 1.888334], 6);

            L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                attribution: '&copy; Google Maps',
                subdomains:['mt0','mt1','mt2','mt3']
            }).addTo(map);

            axios.get('/weather_station')
            .then(function (response) {
                var stations = response.data;
                stations.forEach(function(station) {
                    var icone = station.isActive ? iconeActive : iconeInactive;
                    L.marker([station.latitude, station.longitude, station.altitude], {icon: icone}).addTo(map)
                        .bindPopup("<div class='popup-map'>" + station.name + '<br>' + '<a href="/view_data?station_id='+ station.id +'">Consulter les données</a>' + "</div>");
                });
            })
            .catch(function (error) {
                console.error('Erreur lors de la récupération des données des stations:', error);
            });

            var iconeActive = L.icon({
                iconUrl: "{{ asset('images/icons/greenmark.png') }}",
                iconSize: [25, 25],
                iconAnchor: [12, 25],
                popupAnchor: [0, -15]
            });

            var iconeInactive = L.icon({
                iconUrl: "{{ asset('images/icons/redmark.png') }}",
                iconSize: [25, 25],
                iconAnchor: [12, 25],
                popupAnchor: [0, -15]
            });

        </script>
    @else
        <script>
            var map = L.map('mapid-home').setView([46.603354, 1.888334], 6);

            L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                attribution: '&copy; Google Maps',
                subdomains:['mt0','mt1','mt2','mt3']
            }).addTo(map);

            // Ajouter des marqueurs pour chaque station météo
            axios.get('/weather_station')
                .then(function (response) {
                    var stations = response.data;
                    var userRole = "{{ $user_role }}";
                    stations.forEach(function (station) {
                        var showStation = false;
                        if (station.user_id === {{ auth()->id() }}) {
                            showStation = true;
                        }

                        if (showStation) {
                            var icone = station.isActive ? iconeActive : iconeInactive;
                            L.marker([station.latitude, station.longitude, station.altitude], {icon: icone}).addTo(map)
                                .bindPopup("<div class='popup-map'>" + station.name + '<br>' + '<a href="/view_data?station_id='+ station.id +'">Consulter les données</a>' + "</div>");
                        }
                    });
                })
                .catch(function (error) {
                    console.error('Erreur lors de la récupération des données des stations:', error);
                });

            var iconeActive = L.icon({
                iconUrl: "{{ asset('images/icons/greenmark.png') }}",
                iconSize: [20, 20],
                iconAnchor: [10, 20],
                popupAnchor: [0, -15]
            });

            var iconeInactive = L.icon({
                iconUrl: "{{ asset('images/icons/redmark.png') }}",
                iconSize: [20, 20],
                iconAnchor: [10, 20],
                popupAnchor: [0, -15]
            });
        </script>
    @endif
@endsection
