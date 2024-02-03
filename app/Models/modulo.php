<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
    use HasFactory;
    protected $primaryKey = 'Codigo';
    protected $fillable =['Codigo','Nombre_Colegio','Nombre_Director','Descripcion'];
}
