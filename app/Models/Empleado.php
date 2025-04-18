<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'IdEmpleado';
    protected $fillable = ['Nombre', 'CorreoElectronico', 'Telefono', 'Cargo'];
    public $timestamps = true;
}
