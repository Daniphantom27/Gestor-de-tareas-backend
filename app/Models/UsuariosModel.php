<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'dbo.Usuarios';
    protected $primaryKey  = 'IdUsuario';
    protected $allowedFields = ['Nombre' ,'Telefono', 'Email', 'Contraseña', 'Username', 'Fecharegistro','Estado'];
}