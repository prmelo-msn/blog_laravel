@extends('layouts.app')

@section('content')

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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
