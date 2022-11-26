<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>EGLISE EVANGELIQUE "PORTE DE VIE"</title>
	<link rel="shortcut icon" href="{{ asset('assets/images/logo1.png') }}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">


	 <link rel="stylesheet" href="assets/css/responsive.css" />
	  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">

    <div class="master-wrapper">
        @include('front.layouts.header')

        @yield('content')

        @include('front.layouts.footer')
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
