<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    public $table = 'obra';
    protected $fillable = [
        'Name', 'Estado', 'Precio', 'FechaCreacion', 'Porcentaje', 'img', 'idGenero', 'idUser', 'idArtista', 'bool'
    ];

    public function genero(){
        return $this->belongsTo("App\Models\Genero","idGenero","id");
    }

    public function artista(){
        return $this->belongsTo("App\Models\Artista","idArtista","id");
    }

    public function user(){
        return $this->belongsTo("App\Models\User","idUser","id");
    }
}
