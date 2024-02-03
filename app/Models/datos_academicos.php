<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class datos_academicos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_Academicos';
    protected $fillable =['Id_Academicos','Id_Alumno','Nombre_Colegio','Nombre_Director','Direccion','Telf_Principal','Telf_Fijo','Eduacion_Inicial','Educacion_Basica','Educacion_Media','Educacion_Superior','Cursos'];
}
