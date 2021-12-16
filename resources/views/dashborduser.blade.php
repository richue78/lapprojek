@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>Profik</title>
<header>
    <div class="d-flex justify-content-center">
        <h1>Hello,{{ auth()->user()->username }}</h1>
    </div>
</header>
    <body>
        <h3>Name:{{ auth()->user()->name }}</h3>
        <h3>Email:{{ auth()->user()->email }}</h3>
        
    </body>
@endsection