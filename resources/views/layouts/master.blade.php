<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzOmQGgvCpU18nXbftQ0b9pcZPzP0PrQc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
        #map {
            height: 300px;
            width: 800px;
            margin:auto;
        }
    </style>
    <script>
        let map;

        function initMap() {
            const myMap = { lat: 21.036283, lng: 105.800941 };
            const map = new google.maps.Map(document.getElementById("map"), {
            scaleControl: true,
            center: myMap,
            zoom: 16,
        });
        const infowindow = new google.maps.InfoWindow();
        infowindow.setContent("<b>165 Dương Quảng Hàm</b>");
        const marker = new google.maps.Marker({ map, position: myMap });
        marker.addListener("click", () => {
          infowindow.open(map, marker);
        });
        }
    </script>

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Logo -->
    <link rel="icon" href="{{ asset('storage/logo/logo.jpg') }}" />
</head>

<body>
    @include('layouts.navbar')

    @section('modal')
    {{-- @include('frontend.common.auth-modal') --}}
    @show

    <div class="container">
    @include('layouts.notification')
    </div>

    @yield('cover')

    <div class="container">
    @yield('content')
    </div>

    @include('layouts.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    @yield('script')
</body>

</html>
