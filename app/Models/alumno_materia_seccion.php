<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno_materia_seccion extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable =['Id_Alumno','Id_Materia','Id_Seccion'];
}
