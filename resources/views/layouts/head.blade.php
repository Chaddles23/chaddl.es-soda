<?php
    $colour = '#ff9500';
?>

@section('head.main')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimal-ui">
@stop

@section('head.title')
    <title>It's Caleb</title>
@stop

@section('head.meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- for Google -->
    <meta name="description" content="{{ @$share_setting->share_text }}" />
    <meta name="keywords" content="caleb,chadwick,chaddles,chaddl.es,chaddles23" />

    <meta name="author" content="Caleb Chadwick" />
    <meta name="copyright" content="Caleb Chadwick" />
    <meta name="application-name" content="chaddl.es" />

    <meta name="theme-color" content="{{ $colour }}">
    <meta name="apple-mobile-web-app-title" content="Caleb Chadwick">
	<meta name="theme-color" content="{{ $colour }}">
@stop

@section('head.css')
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
@stop

@section('head.js')
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
@stop

@section('footer.js')
    <script src="/js/app.js"></script>
@stop

@section('head')
    @yield('head.main')
    @yield('head.title')
    @yield('head.meta')
    @yield('head.css')
    @yield('head.js')
    @yield('head.extra')
@show