<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos_modulos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_AlumnoMo';
    protected $fillable =['Id_AlumnoMo','Primer_Nombre','Primer_Apellido','Segundo_Nombre','Segundo_Apellido','Nacionalidad','Sexo','Codigo'];
}
