<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class seccion extends Model
{
    protected $table = 'seccion';
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Id_Seccion';
    protected $fillable =['Id_Seccion','Nombre_Seccion','Nombre_Profesor'];
}
