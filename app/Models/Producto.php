<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    // Relación con DetalleCarrito
    public function detalleCarritos()
    {
        return $this->hasMany(DetalleCarrito::class, 'producto_id');
    }
}
