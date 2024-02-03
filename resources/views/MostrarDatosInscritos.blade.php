@extends('vista')

@section('contenido')
<div class="container">
<h2>DATOS</h2>
<hr>
<form action = "" method="" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="well">
        <h3>DATOS ACADEMICOS</h3>
      <div class="form-group text-black">
          <label for="dni">Id:
            @if($errors->first('ide'))
                    <p class='text-danger'>{{$errors->first('ide')}}</p>
                    @endif
          </label>
          <input type="text" name="ide" id="ide" value="{{$consulta->Id_Alumno}}" class="form-control"  readonly='readonly' placeholder="Id Alumno" tabindex="5">
      </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Nombre">Nombre del Colegio:
                        @if($errors->first('Nombre_Colegio'))
                    <p class='text-danger'>{{$errors->first('Nombre_Colegio')}}</p>
                    @endif
                    </label>
                <input type="text" name="Nombre_Colegio" id="Nombre_Colegio" value="{{$consulta->Nombre_Colegio}}"  readonly='readonly' class="form-control" placeholder="Nombre del Colegio" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Primer_Apellido">Nombre del Director:
                        @if($errors->first('Nombre_Director'))
                    <p class='text-danger'>{{$errors->first('Nombre_Director')}}</p>
                    @endif
                    </label>
                    <input type="text" name="Nombre_Director" id="Nombre_Director" value="{{$consulta->Nombre_Director}}"  readonly='readonly' class="form-control" placeholder="Nombre del Director" tabindex="2">
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
                    <input type="text" name="Telf_Principal" id="Telf_Principal" value="{{$consulta->Telf_Principal}}"  readonly='readonly' class="form-control" placeholder="Telefono Principal" tabindex="4">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <div class="form-group">
                    <label for="Nacionalidad">Telefono Fijo:
                        @if($errors->first('Telf_Fijo'))
                    <p class='text-danger'>{{$errors->first('Telf_Fijo')}}</p>
                    @endif
                    </label>
                <input type="text" name="Telf_Fijo" id="Telf_Fijo" value="{{$consulta->Telf_Fijo}}"  readonly='readonly' class="form-control" placeholder="Telefono Fijo" tabindex="6">
                </div>
            </div>
        </div>
            <div class="form-group text-black">
                <label for="dni">Direccion:</label>
                <textarea name="Direccion" id="Direccion" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta->Direccion}}
            </textarea>
            </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                @if($consulta->Educacion_Inicial=='I')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @elseif($consulta->Educacion_Inicial=='II')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @elseif($consulta->Educacion_Inicial=='III')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @elseif($consulta->Educacion_Inicial=='IV')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @elseif($consulta->Educacion_Inicial=='V')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @elseif($consulta->Educacion_Inicial=='NI')
                <label for="dni">Educacion_Inicial:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial1" name="Educacion_Inicial"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial2" name="Educacion_Inicial" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial3" name="Educacion_Inicial" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial4" name="Educacion_Inicial" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial5" name="Educacion_Inicial" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Inicial5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Inicial6" name="Educacion_Inicial" value = "NI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Inicial6">NI</label>
                </div>
                @endif
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                @if($consulta->Educacion_Basica=='I')
                <label for="dni">Educacion_Basica:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
                @elseif($consulta->Educacion_Basica=='II')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
                @elseif($consulta->Educacion_Basica=='III')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
                @elseif($consulta->Educacion_Basica=='IV')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
                @elseif($consulta->Educacion_Basica=='V')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
                @elseif($consulta->Educacion_Basica=='NI')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica1" name="Educacion_Basica"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica2" name="Educacion_Basica" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica3" name="Educacion_Basica" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica4" name="Educacion_Basica" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica5" name="Educacion_Basica" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Basica5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Basica6" name="Educacion_Basica" value = "NI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Basica6">NI</label>
                </div>
            </div>
            @endif
        </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                @if($consulta->Educacion_Media=='I')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='II')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='III')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='IV')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='V')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='VI')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @elseif($consulta->Educacion_Media=='NI')
                <label for="dni">Educacion Media:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media1" name="Educacion_Media"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media2" name="Educacion_Media" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media3" name="Educacion_Media" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media4" name="Educacion_Media" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Media5" name="Educacion_Media" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media5">V</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media6" name="Educacion_Media" value = "VI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Media6">VI</label>
                </div>
                <div class="custom-control custom-radio" checked="">
                <input disabled type="radio" id="Educacion_Media7" name="Educacion_Media" value = "NI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Media7">NI</label>
                </div>
                @endif
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                @if($consulta->Educacion_Superior=='I')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @elseif($consulta->Educacion_Superior=='II')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @elseif($consulta->Educacion_Superior=='III')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @elseif($consulta->Educacion_Superior=='IV')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @elseif($consulta->Educacion_Superior=='V')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @elseif($consulta->Educacion_Superior=='NI')
                <label for="dni">Educacion Superior:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior1" name="Educacion_Superior"  value = "I" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior1">I</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior2" name="Educacion_Superior" value = "II" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior2">II</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior3" name="Educacion_Superior" value = "III" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior3">III</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior4" name="Educacion_Superior" value = "IV" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior4">IV</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior5" name="Educacion_Superior" value = "V" class="custom-control-input">
                <label class="custom-control-label" for="Educacion_Superior5">V</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Educacion_Superior6" name="Educacion_Superior" value = "NI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Educacion_Superior6">NI</label>
                </div>
                @endif
            </div>
            </div>
        <div class="form-group text-black">
                <label for="dni">Cursos Actualmente Realizados:</label>
                <textarea name="Cursos" id="Cursos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta->Cursos}}
            </textarea>
            </div>
        <br>
        <h3>DATOS SOCIOECONOMICOS</h3>
        <br>
        <div class="form-group text-black">
                <label for="dni">El Estudiante ¿Trabaja?:</label>
                <textarea name="Descripcion_Trabajo" id="Descripcion_Trabajo" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Descripcion_Trabajo}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre de la Empresa:</label>
                <textarea name="Nombre_Empresa" id="Nombre_Empresa" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Nombre_Empresa}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre del Jefe Inmediato:</label>
                <textarea name="Nombre_Jefe" id="Nombre_Jefe" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Nombre_Jefe}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Direccion completa de la empresa:</label>
                <textarea name="Direccion_Empresa" id="Direccion_Empresa" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Direccion_Empresa}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">El Estudiante ¿Tiene Hijos?:</label>
                <textarea name="Hijos" id="Hijos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Hijos}}
            </textarea>
            </div>
            <div class="form-group text-black">
                <label for="dni">Numero Hijos:</label>
                <textarea name="Numero_Hijos" id="Numero_Hijos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Numero_Hijos}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Edades:</label>
                <textarea name="Edad_Hijos" id="Edad_Hijos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Edad_Hijos}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Esta El Estudiante O Grupo Familiar Afiliado A Planes Gubernamentales De Eduacion Salud O Alimentacion? Indique Cuales De Ser Necesario:</label>
                <textarea name="Afiliacion" id="Afiliacion" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Afiliacion}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">¿Considera el Representante Del Niño O Adolescente Que El Mismo Goza De Las Condiciones De Vida Optimas Las Cuales Incluyen Las Herrmientas Necesarias O Recursos De Aprendizaje Para Su Representado? En Caso De No Considerarlo Indique El Por Que:</label>
                <textarea name="Condiciones_Vida" id="Condiciones_Vida" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta2->Condiciones_Vida}}
            </textarea>
            </div>
        <br>
        <h3>DATOS MUSICALES</h3>
        <br>
        <div class="form-group text-black">
                <label for="dni">Programa Orquestales Y/O Corales En Los Que Participa Profesor y Año:</label>
                <textarea name="Programas" id="Programas" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Programas}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Instrumento Principal Profesor y Año Cursado:</label>
                <textarea name="Instrumentos" id="Instrumentos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Instrumentos}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Otro Instrumentos con sus Profesores Respectivos y Años Cursados:</label>
                <textarea name="Instrumentos_2" id="Instrumentos_2" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Instrumentos_2}}
            </textarea>
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
            @if($consulta3->Clase_Estudiante=='SI')
                <label for="dni">¿El Estudiante Recibe Clases En Una Academia o Catedra Nacional Externa?:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Clase_Estudiante1" name="Clase_Estudiante"  value = "SI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Clase_Estudiante1">SI</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Clase_Estudiante2" name="Clase_Estudiante" value = "NO" class="custom-control-input">
                <label class="custom-control-label" for="Clase_Estudiante2">NO</label>
                </div>
                @else
                <label for="dni">¿El Estudiante Recibe Clases En Una Academia o Catedra Nacional Externa?:</label>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Clase_Estudiante1" name="Clase_Estudiante"  value = "SI" class="custom-control-input">
                <label class="custom-control-label" for="Clase_Estudiante1">SI</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Clase_Estudiante2" name="Clase_Estudiante" value = "NO" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Clase_Estudiante2">NO</label>
                </div>
                @endif
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-black">
                <label for="dni">¿Cursa Estudios En Una Institucion Profesional Especializada en Musica?:</label>
                @if($consulta3->Academia=='SI')
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Academia1" name="Academia"  value = "SI" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Academia1">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Academia2" name="Academia" value = "NO" class="custom-control-input">
                <label class="custom-control-label" for="Academia2">Femenino</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Academia1" name="Academia"  value = "SI" class="custom-control-input">
                <label class="custom-control-label" for="Academia1">Masculino</label>
                </div>
                <div class="custom-control custom-radio">
                <input disabled type="radio" id="Academia2" name="Academia" value = "NO" class="custom-control-input" checked="">
                <label class="custom-control-label" for="Academia2">Femenino</label>
                </div>
                @endif
            </div>
         <div class="form-group text-black">
                <label for="dni">Nombre De La Academia Donde Cursa Estudios:</label>
                <textarea name="Institucion" id="Institucion" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Institucion}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Nombre De La Institucion o Universidad:</label>
                <textarea name="Nombre_Ins" id="Nombre_Ins" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Nombre_Ins}}
            </textarea>
            </div>
        <div class="form-group text-black">
                <label for="dni">Cursos Referentes A La Educacion Musical:</label>
                <textarea name="Cursos" id="Cursos" readonly='readonly' class="form-control" tabindex="5">
                    {{$consulta3->Cursos}}
            </textarea>
            </div>   
            <br>
            </form>
            <form>
            <a href="{{route('AlumnosInscritos')}}"><button type="button" class="btn btn-outline-success">Alumnos Inscritos</button>
            <a href="{{route('MostrarInscritos',['ide'=>$consulta->Id_Alumno])}}"><button type="button" class="btn btn-outline-primary">Anterior</button>
</form>
@stop