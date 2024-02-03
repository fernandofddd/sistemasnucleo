@extends('vista')

@section('contenido')
    <div class="container">
    <h1>Registro de Secciones</h1>
<hr>
<form action = "{{route('guardarsecciones')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="well">
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
      <div class="form-group text-black">
          <label for="dni">Id Seccion:
            @if($errors->first('ide'))
                    <p class='text-danger'>{{$errors->first('ide')}}</p>
                    @endif
          </label>
          <input type="text" name="ide" id="ide" value="{{$idesigue}}" class="form-control"  readonly='readonly' placeholder="Id Seccion" tabindex="5">
          </div>
                <div class="form-group">
                    <label for="Nombre_Seccion">Nombre Materia:
                        @if($errors->first('Nombre_Seccion'))
                    <p class='text-danger'>{{$errors->first('Nombre_Seccion')}}</p>
                    @endif
                    </label>
                <input type="text" name="Nombre_Seccion" id="Nombre_Seccion" value="{{$consulta2->Nombre}}" class="form-control" readonly='readonly' placeholder="Nombre Materia" tabindex="1">
                </div>
                 </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Nombre_Profesor">Nombre Profesor:
                        @if($errors->first('Nombre_Profesor'))
                    <p class='text-danger'>{{$errors->first('Nombre_Profesor')}}</p>
                    @endif
                    </label>
                <input type="text" name="Nombre_Profesor" id="Nombre_Profesor" value="{{old('Nombre_Profesor')}}" class="form-control" placeholder="Nombre Materia" tabindex="1">
                </div>
                 </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Codigo">Codigo:
                        @if($errors->first('Codigo'))
                    <p class='text-danger'>{{$errors->first('Codigo')}}</p>
                    @endif
                    </label>
                <input type="text" name="Codigo" id="Codigo" value="{{old('Codigo')}}" class="form-control" placeholder="Codigo" tabindex="1">
                </div>
                 </div>
                 <br>
        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="btn btn-outline-primary" tabindex="13"
                title="Guardar datos ingresados"></div>
        </div>
        </form>
@stop