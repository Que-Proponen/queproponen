<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="¿Qué Proponen?">
    <meta property="og:description" content="Todas las propuestas y programas electorales de los Candidatos a Presidente de la Nación 2019.">
    <meta property="og:image" content="https://pbs.twimg.com/profile_images/1145865499995189249/ytyMvMzH_400x400.jpg">
    <meta property="og:url" content="https://queproponen.com.ar/">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Hotjar Tracking Code for queproponen.com.ar -->
    <script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1417334,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>
<body>
<div id="app">
    <navbar-component></navbar-component>
    <router-view></router-view>
    <add-proposal></add-proposal>
    {{--    <div class="footer center blue lighten-4">--}}
    {{--        <p>Hecho con <3 por Pares del Partido de la Red</p>--}}
    {{--    </div>--}}
</div>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Styles -->
<link href="{{  mix('css/app.css') }}" rel="stylesheet">
<!-- Scripts -->
<script>
	var analyticsCode = "{{config('app.analytics') }}"
</script>
<script src="{{  mix('js/app.js') }}"></script>
</body>
</html>
