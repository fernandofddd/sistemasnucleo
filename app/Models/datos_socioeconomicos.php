<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class datos_socioeconomicos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_Socio';
    protected $fillable =['Id_Socio','Id_Alumno','Descripcion_Trabajo','Nombre_Empresa','Nombre_Jefe','Direccion_Empresa','Hijos','Numero_Hijos','Edad_Hijos','Afiliacion','Condiciones_Vida'];
}
