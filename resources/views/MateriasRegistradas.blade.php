@extends('vista')

@section('contenido')
<div class="container">
	<h1>Materias Registradas</h1>
<br>
<a href="{{route('MateriasRegistradas')}}">
<button type="button" class="btn btn-outline-success">Registrar</button>
</a>
<br>
<br>
<!--@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif-->
<table class="table table-active">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Seccion</th>
      <th scope="col">Nombre Profesor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $c)
    <tr>
        <td>{{$c->Id_Seccion}}</td>
        <td>{{$c->Nombre_Seccion}}</td>
        <td>{{$c->Codigo}}</td>
        <td>{{$c->Nombre_Profesor}}</td>
    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
@stop