@extends('vista')

@section('contenido')
	<div class="container">
	<h1>Registro de Materias</h1>
<hr>
<form action = "{{route('guardarmaterias')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="well">
        <a href="{{route('NuevasSecciones')}}"><button type="button" class="btn btn-outline-success">Agregar Secciones</button></a>
        <br>
        <br>
      <div class="form-group text-black">
          <label for="dni">Id Materia:
            @if($errors->first('ide'))
                    <p class='text-danger'>{{$errors->first('ide')}}</p>
                    @endif
          </label>
          <input type="text" name="ide" id="ide" value="{{$idesigue}}" class="form-control"  readonly='readonly' placeholder="Id Alumno" tabindex="5">
		<div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Nombre">Nombre:
                        @if($errors->first('Nombre'))
                    <p class='text-danger'>{{$errors->first('Primer_Nombre')}}</p>
                    @endif
                    </label>
                <input type="text" name="Nombre" id="Nombre" value="{{old('Nombre')}}" class="form-control" placeholder="Nombre Materia" tabindex="1">
                </div>
                 </div>
                 <br>
        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="btn btn-outline-primary" tabindex="13"
                title="Guardar datos ingresados"></div>
        </div>
                   </div>
                     </div>
                        </div>
@stop