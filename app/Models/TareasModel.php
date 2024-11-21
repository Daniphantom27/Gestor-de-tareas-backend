<?php

namespace App\Models;

use CodeIgniter\Model;

class TareasModel extends Model
{
    protected $table = 'dbo.Tareas';
    protected $primaryKey  = 'IdTarea';
    protected $allowedFields = ['Nombre' ,'Descripcion', 'FechaRegistro', 'IdEstado'];
}