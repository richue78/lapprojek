@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>Home</title>
    <Header>
        @guest
            <Div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 80px">
            <H1>Welcome To LPirateNovel</H1>
        </Div>
        @endguest
        @auth
        <Div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 80px">
            <H1>Welcome To LPirateNovel,{{ auth()->user()->name }}</H1>
        @endauth
    </Header>
    <body>
        @guest
            <div class="d-flex justify-content-evenly flex-wrap">
            @foreach ($book as $b)
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-img-top">
                    <img src="image/{{ $b->details->image}}" class="card-img-top" alt="" >
                </div>
            <div class="card-body">
              <h5 class="card-title">{{ $b ->title }}</h5>
              <a href="/detail/{{ $b->id }}" class="btn btn-primary">ReadNow</a>
            </div>
          </div>
        @endforeach
         </div>
        @endguest
        @auth
            @if (auth()->user()->id==1)
            <Div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 80px">
                <div class="d-flex justify-content-evenly flex-wrap">
                    @foreach ($book as $b)
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card-img-top">
                            <img src="image/{{ $b->details->image}}" class="card-img-top" alt="" >
                        </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $b ->title }}</h5>
                      <div class="d-flex justify-content-evenly">
                            <a href="/" class="btn btn-success">Upadate</a>
                            <a href="/" class="btn btn-primary">ViewDetail</a>
                            <a href="/" class="btn btn-danger">Delete</a>
                       </div>
                    </div>
                  </div>
                @endforeach
                 </div>  
            </Div>
            @else
            
            <div class="d-flex justify-content-evenly flex-wrap">
                @foreach ($book as $b)
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-img-top">
                        <img src="image/{{ $b->details->image}}" class="card-img-top" alt="" >
                    </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $b ->title }}</h5>
                  <a href="/detail/{{ $b->id }}" class="btn btn-primary">ReadNow</a>
                </div>
              </div>
            @endforeach
             </div>  
            @endif
        @endauth
      
    </body>
    @if ($book->count())
        <div class="d-flex justify-content-center">
            {{ $book->links() }}
        </div>
    @else
        <div class="text-center fs-4">
            <H4>Books Not Found</H4>
        </div>
        
    @endif
    
@endsection