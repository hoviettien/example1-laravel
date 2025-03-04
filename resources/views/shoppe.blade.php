<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('eshopper/eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/eshopper/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('eshopper/eshopper/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('eshopper/eshopper/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('eshopper/eshopper/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('eshopper/eshopper/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('eshopper/eshopper/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('eshopper/eshopper/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
    @include('headershoppe')
	@yield('contentshoppe')
    @include('footershoppe')
    @include('scriptshoppe')
	

	

	

  
    
</body>
</html>