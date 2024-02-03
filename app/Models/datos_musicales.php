<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class datos_musicales extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_Musica';
    protected $fillable =['Id_Musica','Id_Alumno','Programas','Instrumentos','Instrumentos_2','Clase_Estudiante','Academia','Institucion','Nombre_Ins','Cursos'];
}
