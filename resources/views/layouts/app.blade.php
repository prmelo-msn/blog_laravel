<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Gerenciador de Posts</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{asset('css/app.css')}}">

 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="/">Laravel 6 Blog</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavDropdown">
 @auth
 <ul class="navbar-nav">
 <li class="nav-item active">
 <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
 </li>
 <li class="nav-item active">
 <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
 </li>
 </ul>
 @endauth
 </div>


 @auth
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{auth()->user()->name}} <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="{{ route('logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 Sair
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
 </form>

 
 </div>
 </li>
 </ul>
@endauth
 </nav>
 <div class="container">
 @include("flash::message")
 @yield('content')
 </div>
 <script src="{{asset('js/app.js')}}"></script>
 </body>
 </html>