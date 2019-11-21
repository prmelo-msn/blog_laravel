@extends('layouts.app')

@section('content')
<form action="{{route('categories.update', ['category' => $category->id])}}" method="post">

@csrf
@method("PUT")

 <div class="form-group">
 <label>Nome</label>
 <input type="text" name="name" class="form-control" value="{{$category->name}}">
 </div>

 <div class="form-group">
 <label>Descrição</label>
 <input type="text" name="description" class="form-control" value="{{$category->description}}">
 </div>

 <div class="form-group">
 <label>Slug</label>
 <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
 </div>

 <button class="btn btn-lg btn-success">Atualizar Categoria</button>
 </form>
 @endsection