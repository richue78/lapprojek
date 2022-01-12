@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>EditProfile</title>
<header>
    <div class="d-flex justify-content-center" style="margin-top: 80px">
                <h1>Hello,{{ auth()->user()->username }}</h1>
            </div> 
      @if (auth()->user()->profileImage==null)
            <div class="mt-5 mb-5 d-flex justify-content-center" style="margin-top: 80px">
                <h1>No profile pictures</h1>
            </div>
        @else
        <div class="mt-5 mb-5 d-flex justify-content-center" style="margin-top: 80px">
            <img src="storage/{{auth()->user()->profileImage}}" alt="" class="rounded-circle" style="width: 250px">
        </div>  
    @endif
    
</header>
    <body>
        <h3>Name:{{ auth()->user()->name }}</h3>
        <h3>Email:{{ auth()->user()->email }}</h3>

        <Div class="mt-5 d-flex justify-content-center">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/EditUser" class="btn btn-primary">Edit Profile</a>
              </div>
        </Div>
    </body>
@endsection