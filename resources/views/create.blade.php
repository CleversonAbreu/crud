@extends('templates.template')
@section('content')
<h1 class="text-center">
  @if(isset($book))Editar @else Cadastrar @endif</h1>
<hr>
<div class="col-8 m-auto ">
    <div class="col-8 m-auto">
        @if(isset($errors)&& count($errors)>0)
          <div class="text-center mt-4 mb-4 p2 alert-danger">
            @foreach ($errors->all() as $item)
              {{$item}}
            @endforeach             
          </div> 
        @endif
    </div>
  @if(isset($book))
  <form name="formEdit" id="formEdit" action="{{url("books/$book->id")}}" method="post">
    @method('PUT')
  @else
    <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
  @endif  
    @csrf
    <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{$book->title ?? ''}}" required>
    <select class="form-control" name="id_user" id="id_user"  value="{{$book->title ?? ''}}" required>
      <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}<option>
       @foreach ($user as $item)
      <option value="{{$item->id}}">{{$item->name}}<option>
       @endforeach 
    </select>  
    <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas" value="{{$book->pages ?? ''}}" required>
    <input class="form-control" type="text" name="price" id="price" placeholder="Preço" value="{{$book->price ?? ''}}" required>
    <input class="btn btn-primary" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
  </form>
</div> 
@endsection