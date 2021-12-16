@extends('layout.main')

@section('container')
<link rel="stylesheet" href="css/style.css">
<body>
   <div class="container">
    <h1></h1>
    <div class="row">
        <div class="col-8">
            <h3 class = "col-12 bg-primary text-white"> Book Detail</h3>
            @foreach ($details as $d)
                  <h5>Title={{$d->books->title}}</h5>
                  <h5>Author={{$d->Author}}</h5>
                  <h5>Publisher={{$d->publisher}}</h5>
                  <h5>year={{$d->year}}</h5>
                  <h5>Description=</h5>
                  <p>{{$d->Description}}</p>
            @endforeach
        </div> 
    </div>
  </div> 
  <div class="container">
    <div class="d-flex ">
        <div class="col-8">
            <h4 class = "col-12 bg-primary"> Chapter List</h4>
            <table class="table table-light">
                <thead>
                  <tr>
                    <th scope="col">Chapter Name</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($chapters as $c)
                    <tr>
                        <td>
                          <a href="/chapterview/{{ $c->id }}">{{$c->ChapterName}}</a>
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