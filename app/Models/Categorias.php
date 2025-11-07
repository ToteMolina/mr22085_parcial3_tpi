<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriasFactory> */
    use HasFactory;
    protected $table = "categorias";
    protected $fillable = [
        "nombreCategoria"
    ];

    public function productos(){
        return $this->belongsTo(Categorias::class);
    }
}
