@extends('vista')

@section('contenido')
<div class="container">
<h2>DATOS</h2>
<hr>
<form action = "{{route('guardardatos')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="well">
        <h3>DATOS ACADEMICOS</h3>
      <div class="form-group text-black">
          <label for="dni">Id:
            @if($errors->first('ide'))
                    <p class='text-danger'>{{$errors->first('ide')}}</p>
                    @endif
          </label>
          <input type="text" name="ide" id="ide" value="{{$idesigue}}" class="form-control" class="text-black"  readonly='readonly' placeholder="Id Alumno" tabindex="5">
      </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Nombre">Nombre del Colegio:
                        @if($errors->first('Nombre_Colegio'))
                    <p class='text-danger'>{{$errors->first('Nombre_Colegio')}}</p>
                    @endif
                    </label>
                <input type="text-dark" name="Nombre_Colegio" id="Nombre_Colegio" value="{{old('Nombre_Colegio')}}" class="form-control" placeholder="Nombre del Colegio" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Apellido">Nombre del Director:
                        @if($errors->first('Nombre_Director'))
                    <p class='text-danger'>{{$errors->first('Nombre_Director')}}</p>
                    @endif
                    </label>
                    <input type="text" name="Nombre_Director" id="Nombre_Director" value="{{old('Nombre_Director')}}" class="form-control" placeholder="Nombre del Director" tabindex="2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Segundo_Apellido">Telefono Principal:
                        @if($errors->first('Telf_Principal'))
                    <p class='text-danger'>{{$errors->first('Telf_Principal')}}</p>
                    @endif
                    </label>
                    <input type="text" name="Telf_Principal" id="Telf_Principal" value="{{old('Telf_Principal')}}" class="form-control" placeholder="Telefono Principal" tabindex="4">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Nacionalidad">Telefono Fijo:
                        @if($errors->first('Telf_Fijo'))
                    <p class='text-danger'>{{$errors->first('Telf_Fijo')}}</p>
                    @endif
                    </label>
                <input type="text" name="Telf_Fijo" id="Telf_Fijo" value="{{old('Telf_Fijo')}}" class="form-control" placeholder="Telefono Fijo" tabindex="6">
                </div>
            </div>
        </div>
            <div class="form-group text-black">
                <label for="dni">Direccion:</label>
                <textarea name="Direccion" id="Direccion" class="form-control" tabindex="5">
            </textarea>
            </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">Educacion_Basica:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
            </div>
            </div>
        <div class="form-group text-black">
                <label for="dni">Cursos Actualmente Realizados:</label>
                <textarea name="Cursos" id="Cursos" class="form-control" tabindex="5">
            </textarea>
            </div>
        <br>
        <h3>DATOS SOCIOECONOMICOS</h3>
        <br>
        <div class="form-group text-black">
                <label for="dni">El Estudiante ¿Trabaja?:</label>
                <textarea name="Descripcion_Trabajo" id="Descripcion_Trabajo" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre de la Empresa:</label>
                <textarea name="Nombre_Empresa" id="Nombre_Empresa" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre del Jefe Inmediato:</label>
                <textarea name="Nombre_Jefe" id="Nombre_Jefe" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Direccion completa de la empresa:</label>
                <textarea name="Direccion_Empresa" id="Direccion_Empresa" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">El Estudiante ¿Tiene Hijos?:</label>
                <textarea name="Hijos" id="Hijos" class="form-control" tabindex="5">
            </textarea>
            </div>
            <div class="form-group text-black">
                <label for="dni">Numero Hijos:</label>
                <textarea name="Numero_Hijos" id="Numero_Hijos" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Edades:</label>
                <textarea name="Edad_Hijos" id="Edad_Hijos" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Esta El Estudiante O Grupo Familiar Afiliado A Planes Gubernamentales De Eduacion Salud O Alimentacion? Indique Cuales De Ser Necesario:</label>
                <textarea name="Afiliacion" id="Afiliacion" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">¿Considera el Representante Del Niño O Adolescente Que El Mismo Goza De Las Condiciones De Vida Optimas Las Cuales Incluyen Las Herrmientas Necesarias O Recursos De Aprendizaje Para Su Representado? En Caso De No Considerarlo Indique El Por Que:</label>
                <textarea name="Condiciones_Vida" id="Condiciones_Vida" class="form-control" tabindex="5">
            </textarea>
            </div>
        <br>
        <h3>DATOS MUSICALES</h3>
        <br>
        <div class="form-group text-black">
                <label for="dni">Programa Orquestales Y/O Corales En Los Que Participa Profesor y Año:</label>
                <textarea name="Programas" id="Programas" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Instrumento Principal Profesor y Año Cursado:</label>
                <textarea name="Instrumentos" id="Instrumentos" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Otro Instrumentos con sus Profesores Respectivos y Años Cursados:</label>
                <textarea name="Instrumentos_2" id="Instrumentos_2" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">¿El Estudiante Recibe Clases En Una Academia o Catedra Nacional Externa?:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Clase_Estudiante1" name="Clase_Estudiante"  value = "SI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Clase_Estudiante1">SI</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Clase_Estudiante2" name="Clase_Estudiante" value = "NO" class="custom-control-input">
                <label class="custom-control-label" for="Clase_Estudiante2">NO</label>
                </div>
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">¿Cursa Estudios En Una Institucion Profesional Especializada en Musica?:</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="Academia1" name="Academia"  value = "SI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Academia1">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="Academia2" name="Academia" value = "NO" class="custom-control-input">
                <label class="custom-control-label" for="Academia2">Femenino</label>
                </div>
            </div>
         <div class="form-group text-black">
                <label for="dni">Nombre De La Academia Donde Cursa Estudios:</label>
                <textarea name="Institucion" id="Institucion" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre De La Institucion o Universidad:</label>
                <textarea name="Nombre_Ins" id="Nombre_Ins" class="form-control" tabindex="5">
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Cursos Referentes A La Educacion Musical:</label>
                <textarea name="Cursos" id="Cursos" class="form-control" tabindex="5">
            </textarea>
            </div>   
        <div class="row">
            <div class="col-xs-6 col-md-6 text-black"><input type="submit" value="Guardar" class="btn btn-outline-primary  text-white" tabindex="13"
                title="Guardar datos ingresados"></div>
        </div>
</form>
@stop