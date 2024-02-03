<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\datos_academicos;
use App\Models\datos_socioeconomicos;
use App\Models\datos_musicales;
use App\Models\materia;
use App\Models\seccion;
use Session;

class SistemaController extends Controller
{
	public function vista()
	{
		return view('vista');
	}
	public function Inscripcion()
	{
		$consulta = alumnos::orderBy('Id_Alumno', 'DESC')->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos == 0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->Id_Alumno + 1;
        }
        //$departamentos = departamentos::orderBy('nombre')->get();

        return view('Inscripcion')->with('idesigue', $idesigue);
            //->with('departamentos', $departamentos);
	}
	public function guardaralumno(Request $request){
	     $this->validate($request, ['Primer_Nombre' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/', 'Segundo_Nombre' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/', 'Primer_Apellido' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/', 'Segundo_Apellido' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/', 'img' => 'image|mimes:jpeg,gif,png']);

	    $file = $request->file('img');
        if ($file <> "") {
            $img = $file->getClientOriginalName();
            $img2 = $request->ide . $img;
            \Storage::disk('local')->put($img2, \File::get($file));
        } else {
            $img2 = "sinfoto.jpg";
        }

        $file = $request->file('img3');
        if ($file <> "") {
            $img3 = $file->getClientOriginalName();
            $img4 = $request->ide. $request->ide . $img3;
            \Storage::disk('local')->put($img4, \File::get($file));
        } else {
            $img4 = "sinfoto.jpg";
        }

        $file = $request->file('img5');
        if ($file <> "") {
            $img5 = $file->getClientOriginalName();
            $img6 = $request->ide. $request->ide. $request->ide . $img5;
            \Storage::disk('local')->put($img6, \File::get($file));
        } else {
            $img6 = "sinfoto.jpg";
        }

	    $alumnos = new alumnos;
        $alumnos->Id_Alumno = $request->ide;
        $alumnos->Primer_Nombre = $request->Primer_Nombre;
        $alumnos->Primer_Apellido = $request->Primer_Apellido;
        $alumnos->Segundo_Nombre = $request->Segundo_Nombre;
        $alumnos->Segundo_Apellido = $request->Segundo_Apellido;
        $alumnos->Nacionalidad = $request->Nacionalidad;
        $alumnos->Cedula = $request->Cedula;
        $alumnos->Sexo = $request->sexo;
        $alumnos->Lugar_Nacimiento = $request->Lugar_Nacimiento;
        $alumnos->Fecha_Nacimiento = $request->Fecha_Nacimiento;
        $alumnos->Materia_Alumno = $request->Materia_Alumno;
        $alumnos->Foto = $img2;
        $alumnos->Foto_Cedula = $img4;
        $alumnos->Partida_Nacimiento = $img6;
        $alumnos->save();

        $aux = $request->ide;

         //return "logrado";
         return redirect()->route('Datos');
         }

         public function Datos(){
        $consulta = datos_academicos::orderBy('Id_Academicos', 'DESC')->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos == 0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->Id_Alumno + 1;
        }
        return view('Datos')->with('idesigue', $idesigue);
         }
         public function guardardatos(Request $request){
        $this->validate($request, ['Nombre_Colegio' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/', 'Nombre_Director' => 'required|regex:/^[A-Z][A-Z,a-z, , á, é, í, ó, ú, ü]+$/',  'Telf_Principal' => 'required|regex:/^[0-9]{11}$/', 'Telf_Fijo' => 'required|regex:/^[0-9]{11}$/']);

        $datos_academicos = new datos_academicos;
        $datos_academicos->Id_Academicos = $request->ide;
        $datos_academicos->Id_Alumno = $request->ide;
        $datos_academicos->Nombre_Colegio  = $request->Nombre_Colegio;
        $datos_academicos->Nombre_Director = $request->Nombre_Director;
        $datos_academicos->Telf_Principal = $request->Telf_Principal;
        $datos_academicos->Telf_Fijo = $request->Telf_Fijo;
        $datos_academicos->Direccion  = $request->Direccion;
        $datos_academicos->Educacion_Inicial = $request->Educacion_Inicial;
        $datos_academicos->Educacion_Basica = $request->Educacion_Basica;
        $datos_academicos->Educacion_Media = $request->Educacion_Media;
        $datos_academicos->Educacion_Superior = $request->Educacion_Superior;
        $datos_academicos->Cursos = $request->Cursos;
        $datos_academicos->save();

        $datos_socioeconomicos = new datos_socioeconomicos;
        $datos_socioeconomicos->Id_Socio = $request->ide;
        $datos_socioeconomicos->Id_Alumno = $request->ide;
        $datos_socioeconomicos->Descripcion_Trabajo = $request->Descripcion_Trabajo;
        $datos_socioeconomicos->Nombre_Empresa = $request->Nombre_Empresa;
        $datos_socioeconomicos->Nombre_Jefe = $request->Nombre_Jefe;
        $datos_socioeconomicos->Direccion_Empresa = $request->Direccion_Empresa;
        $datos_socioeconomicos->Hijos = $request->Hijos;
        $datos_socioeconomicos->Numero_Hijos = $request->Numero_Hijos;
        $datos_socioeconomicos->Edad_Hijos = $request->Edad_Hijos;
        $datos_socioeconomicos->Afiliacion = $request->Afiliacion;
        $datos_socioeconomicos->Condiciones_Vida = $request->Condiciones_Vida;
        $datos_socioeconomicos->save();

        $datos_musicales = new datos_musicales;
        $datos_musicales->Id_Musica = $request->ide;
        $datos_musicales->Id_Alumno = $request->ide;
        $datos_musicales->Programas = $request->Programas;
        $datos_musicales->Instrumentos = $request->Instrumentos;
        $datos_musicales->Instrumentos_2 = $request->Instrumentos_2;
        $datos_musicales->Clase_Estudiante = $request->Clase_Estudiante;
        $datos_musicales->Academia = $request->Academia;
        $datos_musicales->Institucion = $request->Institucion;
        $datos_musicales->Nombre_Ins = $request->Nombre_Ins;
        $datos_musicales->Cursos  = $request->Cursos;
        $datos_musicales->save();
        return redirect()->route('AlumnosInscritos');
         }

        public function AlumnosInscritos()
    {
        $consulta = alumnos::withTrashed()
            ->select('alumnos.Id_Alumno', 'alumnos.Primer_Nombre', 'alumnos.Primer_Apellido','alumnos.Segundo_Nombre' , 'alumnos.Segundo_Apellido', 'alumnos.Nacionalidad','alumnos.Sexo' , 'alumnos.Cedula', 'alumnos.Lugar_Nacimiento', 'alumnos.Foto')
            ->orderBy('alumnos.Primer_Nombre')
            ->get();
        return view('AlumnosInscritos')->with('consulta', $consulta);
    }

    public function MostrarInscritos($ide)
    {
        $consulta = alumnos::withTrashed()
            ->select('alumnos.Id_Alumno', 'alumnos.Primer_Nombre', 'alumnos.Primer_Apellido','alumnos.Segundo_Nombre' , 'alumnos.Segundo_Apellido', 'alumnos.Nacionalidad','alumnos.Sexo' , 'alumnos.Cedula', 'alumnos.Lugar_Nacimiento', 'alumnos.Fecha_Nacimiento', 'alumnos.Foto', 'alumnos.Foto_Cedula','alumnos.Partida_Nacimiento')
            ->where('Id_Alumno', $ide)
            ->get();
        return view('MostrarInscritos')->with('consulta', $consulta[0]);
    }

    public function MostrarDatosInscritos($ide)
    {
        $consulta = datos_academicos::withTrashed()
            ->select('datos_academicos.Id_Academicos', 'datos_academicos.Id_Alumno', 'datos_academicos.Nombre_Colegio','datos_academicos.Nombre_Director' , 'datos_academicos.Telf_Principal', 'datos_academicos.Telf_Fijo','datos_academicos.Direccion' , 'datos_academicos.Educacion_Inicial', 'datos_academicos.Educacion_Basica', 'datos_academicos.Educacion_Media', 'datos_academicos.Educacion_Superior', 'datos_academicos.Cursos')
            ->where('Id_Alumno', $ide)
            ->get();
        $consulta2 = datos_socioeconomicos::withTrashed()
            ->select('datos_socioeconomicos.Id_Socio', 'datos_socioeconomicos.Id_Alumno', 'datos_socioeconomicos.Descripcion_Trabajo','datos_socioeconomicos.Nombre_Empresa' , 'datos_socioeconomicos.Nombre_Jefe', 'datos_socioeconomicos.Direccion_Empresa','datos_socioeconomicos.Hijos' , 'datos_socioeconomicos.Numero_Hijos', 'datos_socioeconomicos.Edad_Hijos', 'datos_socioeconomicos.Afiliacion', 'datos_socioeconomicos.Condiciones_Vida')
            ->where('Id_Alumno', $ide)
            ->get();
        $consulta3 = datos_musicales::withTrashed()
            ->select('datos_musicales.Id_Musica', 'datos_musicales.Id_Alumno', 'datos_musicales.Programas','datos_musicales.Instrumentos' , 'datos_musicales.Instrumentos_2', 'datos_musicales.Clase_Estudiante','datos_musicales.Academia' , 'datos_musicales.Institucion', 'datos_musicales.Nombre_Ins', 'datos_musicales.Cursos')
            ->where('Id_Alumno', $ide)
            ->get();
        return view('MostrarDatosInscritos')->with('consulta', $consulta[0])->with('consulta2', $consulta2[0])->with('consulta3', $consulta3[0]);
    }
    public function Menu()
    {
        return view('Menu');
    }
    public function RegistroMaterias(){
        $consulta = materia::orderBy('Idd_Materia', 'DESC')->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos == 0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->Idd_Materia + 1;
        }

        return view('RegistroMaterias')->with('idesigue', $idesigue);
                }
    public function guardarmaterias(Request $request){
        $materia = new materia;
        $materia->Idd_Materia = $request->ide;
        $materia->Nombre = $request->Nombre;
        $materia->save();
        return redirect()->route('RegistroSecciones', ['idd' => $request->ide]);
    }

    public function RegistroSecciones($idd){
        $consulta = seccion::orderBy('Id_Seccion', 'DESC')->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos == 0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->Id_Seccion + 1;
        }

        $consulta2 = materia::withTrashed()
            ->select('materia.Idd_Materia', 'materia.Nombre')
            ->where('Idd_Materia', $idd)
            ->get();

        return view('RegistroSecciones')->with('idesigue', $idesigue)->with('consulta2', $consulta2[0]);
                }

     public function guardarsecciones(Request $request){
        $materia = new seccion;
        $materia->Id_Seccion = $request->ide;
        $materia->Nombre_Seccion = $request->Nombre_Seccion;
                ;
        $materia->Nombre_Profesor  = $request->Nombre_Profesor;
        $materia->Codigo  = $request->Codigo;
        $materia->save();
        return "Logrado";
    }

    public function NuevasSecciones(){
        $consulta = seccion::orderBy('Id_Seccion', 'DESC')->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos == 0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->Id_Seccion + 1;
        }
            $materias = materia::orderBy('Nombre')->get();
        return view('NuevasSecciones')->with('idesigue', $idesigue)->with('materias', $materias);
                }

     public function guardarnuevassecciones(Request $request){
        $materia = new seccion;
        $materia->Id_Seccion = $request->ide;
        $materia->Nombre_Seccion = $request->Nombre_Seccion;
                ;
        $materia->Nombre_Profesor  = $request->Nombre_Profesor;
        $materia->Codigo  = $request->Codigo;
        $materia->save();
        Session::flash('Mensaje', "La seccion ha sido agregada correctamente");
        return redirect()->route('NuevasSecciones');
    }

    public function MateriasRegistradas(){
        $consulta = seccion::withTrashed()
            ->select('seccion.Id_Seccion', 'seccion.Nombre_Seccion', 'seccion.Nombre_Profesor','seccion.Codigo')
            ->get();
        return view('MateriasRegistradas')->with('consulta', $consulta);
                }
    }



