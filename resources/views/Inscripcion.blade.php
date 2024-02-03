@extends('vista')

@section('contenido')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<div class="container">
<h1>INSCRIPCION</h1>
<hr>
<form action = "{{route('guardaralumno')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="well">
      <div class="form-group text-black">
          <label for="dni">Id Alumno:
            @if($errors->first('ide'))
                    <p class='text-danger'>{{$errors->first('ide')}}</p>
                    @endif
          </label>
          <input type="text" name="ide" id="ide" value="{{$idesigue}}" class="form-control" class="font-weight: bold"  readonly='readonly' placeholder="Id Alumno" tabindex="5">
      </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Nombre">Primer Nombre: 
                        @if($errors->first('Primer_Nombre'))
                    <p class='text-danger'>{{$errors->first('Primer_Nombre')}}</p>
                    @endif
                    </label>
                <input type="text" name="Primer_Nombre" id="Primer_Nombre"  value="{{old('Primer_Nombre')}}" class="form-control" class="font-weight: bold" placeholder="Primer Nombre" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Apellido">Primer Apellido:
                        @if($errors->first('Primer_Apellido'))
                    <p class='text-danger'>{{$errors->first('Primer_Apellido')}}</p>
                    @endif
                    </label>
                    <input type="text" name="Primer_Apellido" id="Primer_Apellido" value="{{old('Primer_Apellido')}}" class="form-control" placeholder="Primer Apellido" tabindex="2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Segundo_Nombre">Segundo Nombre:
                        @if($errors->first('Segundo_Nombre'))
                    <p class='text-danger'>{{$errors->first('Segundo_Nombre')}}</p>
                    @endif
                    </label>
                <input type="text" name="Segundo_Nombre" id="Segundo_Nombre" value="{{old('Segundo_Nombre')}}" class="form-control" placeholder="Segundo Nombre" tabindex="3">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Segundo_Apellido">Segundo Apellido:
                        @if($errors->first('Segundo_Apellido'))
                    <p class='text-danger'>{{$errors->first('Segundo_Apellido')}}</p>
                    @endif
                    </label>
                    <input type="text" name="Segundo_Apellido" id="Segundo_Apellido" value="{{old('Segundo_Apellido')}}" class="form-control" placeholder="Segundo Apellido" tabindex="4">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Nacionalidad">Nacionalidad:
                        @if($errors->first('Nacionalidad'))
                    <p class='text-danger'>{{$errors->first('Nacionalidad')}}</p>
                    @endif
                    </label>
                <input type="text" name="Nacionalidad" id="Nacionalidad" value="{{old('Nacionalidad')}}" class="form-control" placeholder="Nacionalidad" tabindex="6">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Cedula">Cedula:
                        @if($errors->first('Cedula'))
                    <p class='text-danger'>{{$errors->first('Cedula')}}</p>
                    @endif
                    </label>
                    <input type="number" name="Cedula" id="Cedula" value="{{old('Cedula')}}" class="form-control" placeholder="Cedula" tabindex="7">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Lugar_Nacimiento">Lugar de Nacimiento:
                        @if($errors->first('Lugar_Nacimiento'))
                    <p class='text-danger'>{{$errors->first('Lugar_Nacimiento')}}</p>
                    @endif
                    </label>
                    <input type="Lugar_Nacimiento" name="Lugar_Nacimiento" id="Lugar_Nacimiento" value="{{old('Lugar_Nacimiento')}}" class="form-control" placeholder="Lugar de Nacimiento" tabindex="8">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Fecha_Nacimiento">Fecha de Nacimiento:
                        @if($errors->first('Fecha_Nacimiento'))
                    <p class='text-danger'>{{$errors->first('Fecha_Nacimiento')}}</p>
                    @endif
                    </label>
                    <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" value="{{old('Fecha_Nacimiento')}}" class="form-control" placeholder="Fecha de Nacimiento" tabindex="9">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">Sexo:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="sexo1" name="sexo"  value = "M" class="custom-control-input" checked="">
                <label class="custom-control-label" for="sexo1">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="sexo2" name="sexo" value = "F" class="custom-control-input">
                <label class="custom-control-label" for="sexo2">Femenino</label>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
              <div class="form-group">
                <label for="Materia_Alumno">Materia:</label>
                <select name = 'Materia_Alumno' class="custom-select">
                  <option selected="">Selecciona un departamento</option>
                  <option value="1">Compras</option>
                  <option value="2">Ventas</option>
                  <option value="3">Producción</option>
                </select>
              </div>
            </div>
        </div>
         <div class="form-group text-black">
                <label for="id">Foto perfil:
                    @if($errors->first('img'))
                    <p class='text-danger'>{{$errors->first('img')}}</p>
                    @endif
                </label>
                <input type="file" name="img" id="img" class="form-control" tabindex="10">
            </div>
            <div class="form-group text-black">
                <label for="id">Foto Cedula:
                    @if($errors->first('img3'))
                    <p class='text-danger'>{{$errors->first('img3')}}</p>
                    @endif
                </label>
                <input type="file" name="img3" id="img3" class="form-control" tabindex="11">
            </div>
            <div class="form-group text-black">
                <label for="id">Foto Partida Nacimiento:
                    @if($errors->first('img5'))
                    <p class='text-danger'>{{$errors->first('img5')}}</p>
                    @endif
                </label>
                <input type="file" name="img5" id="img5" class="form-control" tabindex="12">
            </div>
        <div class="row">
            <div class="col-xs-6 col-md-6 text-black"><input type="submit" value="Guardar" class="btn btn-outline-primary  text-white" tabindex="13"
                title="Guardar datos ingresados"></div>
        </div>
</form>
@stop