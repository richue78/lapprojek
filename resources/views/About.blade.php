@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title> {{ $title }}</title>
<header>
    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <h1>Noob Web Owner</h1>
    </div>
</header>
    <body>
        
        <h3>WonderValka</h3>
        <h3>richue78@gmail.com</h3>
        <div class="d-flex justify-content-center">
            <h4>Saweria nya Bossku</h4>
        </div>
        <div class="d-flex justify-content-center">
                 <img src="{{ $image }}" alt="" width="200">
           
        </div>
    </body>
@endsection