@extends('layout.main')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title> {{ $title }}</title>
<h1>Register</h1>
<link rel="stylesheet" href="style.css">
    <body>
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control rounded-top @error ('name') is-invalid @enderror" id="name" required autofocus>
                                            @error ('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                              @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">UserName</label>
                                        <div class="col-md-6">
                                            <input type="text" name="username" class="form-control rounded-top @error ('username') is-invalid @enderror" id="username">
                                            @error ('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email" class="form-control rounded-top @error ('email') is-invalid @enderror" id="email" >
                                            @error ('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="password"name="password" class="form-control rounded-top" id="password"  >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password_confirmation" class="form-control rounded-top" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>

                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
        </main>
    </body>
@endsection