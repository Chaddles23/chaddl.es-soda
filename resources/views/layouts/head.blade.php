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

    <meta name="apple-mobile-web-app-title" content="Caleb Chadwick">
	<meta name="theme-color" content="{{ $colour }}">

    <link rel="apple-touch-icon" sizes="57x57" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://s3.amazonaws.com/files.chaddl.es/chaddl.es/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="{{ $colour }}">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
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