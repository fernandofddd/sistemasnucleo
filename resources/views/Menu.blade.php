@extends('vista')

@section('contenido')

<div class="card  mb-4">
  <h3 class=" text-white card-header bg-warning"><center>BIENVENIDO</center></h3>
  	<img src="{{asset('Logo2.jpg')}}" height = "700" width="1500"/>
    <rect width="100%" height="100%" fill="#868e96"></rect>
  </svg>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
    <td scope="col">
   <div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
  <div class="card-body">
    <h4 class="card-title"><center>Inscripciones</center></h4> <a href="{{route('Inscripcion')}}">
    <p class="card-text text-white">Inscribir Nuevos Alumnos: Data Academica, Data Musical, Data Socioeconomica</p>
  </div>
  </div>
      </td>
      <td>
  	<div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
  <div class="card-body"> <h4 class="card-title"><center>Alumnos Inscritos</center></h4><a href="{{route('AlumnosInscritos')}}">
    <p class="card-text text-white">Consultar los Alumnos Inscritos: Data Academica, Data Musical, Data Socioeconomica.</p>
  </div>
</td>
<td>
  	<div class="card text-white bg-primary mb-3" href="{{route('Menu')}} style="max-width: 50rem;">
  <div class="card-body">
    <h4 class="card-title"><center>Registro Materias</center></h4> <a href="{{route('RegistroMaterias')}}">
    <p class="card-text text-white">Registro de las Materias y de las Secciones que estaran disponibles para el Alumno.</p>
  </div>
</td>

</div>

@stop