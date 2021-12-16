@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>Home</title>
    <Header>
        <Div class="d-flex  justify-content-center">
            <H1>Welcome To LPirateNovel</H1>
        </Div>
    </Header>
    <body>
        <div class="d-flex justify-content-evenly flex-wrap">
            @foreach ($book as $b)
            <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $b ->title }}</h5>
              <a href="/detail/{{ $b->id }}" class="btn btn-primary">ReadNow</a>
            </div>
          </div>
        @endforeach</div>
        
        
    </body>
@endsection