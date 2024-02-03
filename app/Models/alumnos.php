<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class alumnos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_Alumno';
    protected $fillable =['Id_Alumno','Primer_Nombre','Primer_Apellido','Segundo_Nombre','Segundo_Apellido','Nacionalidad','Sexo','Cedula','Lugar_Nacimiento','Fecha_Nacimiento','Foto','Partida_Nacimiento','Foto_Cedula','Materia_Alumno'];
}
