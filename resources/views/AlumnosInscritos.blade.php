@extends('vista')

@section('contenido')
<div class="container">
	<h1>Alumnos Inscritos</h1>
<br>
<a href="{{route('Inscripcion')}}">
<button type="button" class="btn btn-outline-success">Inscribir</button>
</a>
<br>
<br>
<!--@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif-->
<table class="table table-active">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <!-- <th scope="col">Clave</th> -->
      <th scope="col">Nombre Completo</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Cedula</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($consulta as $c)
    <tr>
      <td> <img src="{{asset('archivos/'.$c->Foto)}}"height = "100" width="100"></td>
      <td>{{$c->Primer_Nombre}} {{$c->Segundo_Nombre}} {{$c->Primer_Apellido}} {{$c->Segundo_Apellido}}</td>
      <td>{{$c->Nacionalidad}}</td>
      <td>{{$c->Sexo}}</td>
      <td>{{$c->Cedula}}</td>
      <td><a href="{{route('MostrarInscritos',['ide'=>$c->Id_Alumno])}}"><button type="button" class="btn btn-outline-primary">Mostrar</button></a></td>

    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
@stop