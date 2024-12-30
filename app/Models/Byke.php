<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Byke extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio_compra', 'precio_venta', 'stock', 'supplier_id', 'category_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
