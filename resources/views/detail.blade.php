@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<body>
  
   <div class="container">
    <div class="row ">
        <div class=" mt-5 col-8 ">
            <h3 class = "col-12 bg-primary text-white"> Book Detail</h3>
            @foreach ($details as $d)
                  
                  <h5>Title:{{$d->books->title}}</h5>
                  <h5>Author:{{$d->Author}}</h5>
                  <h5>Publisher:{{$d->publisher}}</h5>
                  <h5>Year:{{$d->year}}</h5>
                  <h5>Synopsis:</h5>
                  <p>{{$d->Description}}</p>
            @endforeach
        </div> 
    </div>
  </div> 
  <div class="container">
    <div class="row">
        <div class="mb-5 col-8">
            <h4 class = "col-12 bg-primary text-white"> Chapter List</h4>
            <table class="table table-light">
                {{-- <thead>
                  <tr>
                    <th scope="col">Chapter Name</th>
                    
                  </tr>
                </thead> --}}
                <tbody>
                  
                    @foreach ($chapters as $c)
                    <tr>
                        <td>
                          <a class="text-decoration-none" href="/chapterview/{{ $c->id }}">{{$c->ChapterName}}</a>
                        </td>
                        
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div> 
    </div>
  </div>
</body>

@endsection