<!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>
    	<meta charset="utf-8">

    	<title></title>
    	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }} ">
    	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }} ">
    	<script type="text/javascript"  src="{{asset('js/bootstrap.min.js') }}"></script>
    	<script type="text/javascript"  src="{{asset('js/bootstrap.bundle.js') }}"></script>
    	<script type="text/javascript"  src="{{asset('js/bootstrap.js') }}"></script>
    	<script type="text/javascript"  src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
    </head>
    <body>
     


     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/post">Home <span class="sr-only">(current)</span></a>
      </li>
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{url('register')}}">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('login')}}">Login <span class="sr-only">(current)</span></a>
      </li>
      
      @else
        <li class="nav-item active">
        <a class="nav-link" >    {{ Auth::user()->name}} <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('logout')}}">Logout <span class="sr-only">(current)</span></a>
      </li>
      @endguest
      
</nav>

@yield("content")

    </body>
    </html>
