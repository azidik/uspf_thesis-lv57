<!DOCTYPE html>
<html>
<head>
	<title>TESDA | WELCOME</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/x-icon" href="{{ asset('images/logo-tesda.jpg') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">

</head>
<body>
	<main class="py-4">
        @yield('content')
    </main>