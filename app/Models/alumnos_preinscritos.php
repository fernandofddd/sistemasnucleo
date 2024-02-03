<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos_preinscritos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_AlumnoPre';
    protected $fillable =['Id_AlumnoPre','Primer_Nombre','Primer_Apellido','Segundo_Nombre','Segundo_Apellido','Nacionalidad','Sexo','Cedula','Lugar_Nacimiento','Fecha_Nacimiento','Foto','Partida_Nacimiento','Foto_Cedula','Cedula_Representante'];
}
