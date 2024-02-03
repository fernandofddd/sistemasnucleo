<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class materia extends Model
{
    protected $table = 'materia';
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'Idd_Materia';
    protected $fillable =['Idd_Materia','Nombre'];
}
