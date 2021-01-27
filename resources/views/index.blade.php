@extends('templates.template')
@section('content')
<h1 class="text-center">Crud</h1>
<hr>
<div class="text-center mt-3 mb-4">
<a href="{{url('books/create')}}">
    <button class="btn btn-success">Cadastrar</button>
  </a> 
</div> 
<div class="col-8 m-auto">
  @csrf
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo Livro</th>
            <th scope="col">Páginas</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($book as $item)
          @php
            $user=$item->find($item->id)->relUsers;    
          @endphp
            <tr>
              <th scope="row">1</th>
              <td> {{$item->title}}</td>
              <td> {{$item->pages}}</td>
              <td> {{$user->name}}</td>
              <td> R${{str_replace('.',',',$item->price)}}</td>
            <td> <a href="{{url("books/$item->id")}}"><button class="btn btn-dark">Visualizar</button></a></td>
              <td> <a href="{{url("books/$item->id/edit")}}"><button class="btn btn-primary">Editar</button></a></td>
              <td> <a href="{{url("books/$item->id")}}" class="js-del"><button class="btn btn-danger">Excluir</button></a></td>
            </tr>   
          @endforeach         
        </tbody>
      </table>
      {{$book->links()}}
</div>
@endsection