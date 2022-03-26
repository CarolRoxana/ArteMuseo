<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPermiso extends Model
{
    public $table = 'rol_permiso';
    protected $fillable = [
        'idRol', 'idPermiso'
    ];

    public function permiso(){
        return $this->belongsTo("App\Models\Permiso","idPermiso","id");
    }
}
