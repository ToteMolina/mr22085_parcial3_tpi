<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;
    protected $table = "productos";
    protected $fillable = [
        "nombre",
        "precio",
        "idcategoria",
        "idproveedor"
    ];

    public function categorias(){
        return $this->hasMany(Producto::class);
    }

    public function proveedor(){
        return $this->hasMany(Producto::class);
    }
}
