<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/about.css') }}" /> -->
    <!-- <title>Document</title> -->
</head>

<body>
    @include("parts.common", [ "title" => "8COLOGY MAP | えころじー | プラスチックごみ削減" ])
    @include("parts.header")
    <div class="map">
        <div id="map" class="map_action" style="width:100%; height:480px"></div>
    </div>
    @include("parts.footer")
    <script type="text/javascript">
        function initMap() {
            var opts = {
                zoom: 17,
                center: new google.maps.LatLng(33.590909, 130.398654),
                // GoogleMapのスタイルを変更
                styles: [
                    // ここに書き出されたJSONをペースト
                    {
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e9f5f3"
                        }]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#f5f5f5"
                        }]
                    },
                    {
                        "featureType": "administrative.locality",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#bde3c7"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "color": "#bffcff"
                            },
                            {
                                "saturation": -25
                            },
                            {
                                "visibility": "simplified"
                            },
                            {
                                "weight": 4.5
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#dadada"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "transit.station.bus",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "water",
                        "stylers": [{
                                "color": "#61c6de"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#4bafc9"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#4bafc9"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    }
                ]
            };

            var map = new google.maps.Map(document.getElementById("map"), opts);

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                title: "8COLOGY",
                icon: {
                    url: "img/logo_ss.png",
                    scaledSize: new google.maps.Size(45, 35)
                },
            });

            var mapOptions = {
                mapTypeControl: true, //マップタイプ コントロール
                fullscreenControl: true, //全画面表示コントロール
                streetViewControl: true, //ストリートビュー コントロール
                zoomControl: true, //ズーム コントロール
            };
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4UaV9cSASCLZn13PGhPhZoFU803-Y64I&libraries=places&callback=initMap"></script>

</body>

</html>