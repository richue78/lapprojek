@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>Home</title>
    <Header>
        <Div class="d-flex  justify-content-center">
            @foreach ($view as $v)
                <H1>{{$v->ChapterName}}</H1>
            @endforeach
            
        </Div>
    </Header>
    <body>
        <div class="container">
         <h1></h1>
         <div class="row">
             <div class="col-8">
                 
                 @foreach ($view as $v)
                       <p>{{$v->storyChapter}}</p>
                 @endforeach
             </div> 
         </div>
       </div> 
     </body>
@endsection