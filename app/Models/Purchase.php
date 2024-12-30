<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    // Campos que se pueden asignar de forma masiva
    protected $fillable = ['byke_id', 'cantidad', 'precio_unitario'];

    /**
     * Relación con el modelo Byke.
     * Un Purchase pertenece a una Byke.
     */
    public function byke()
    {
        return $this->belongsTo(Byke::class);
    }

    /**
     * Relación con el modelo Supplier a través del modelo Byke.
     * Un Purchase puede acceder a su Supplier a través de Byke.
     */
    public function supplier()
    {
        return $this->hasOneThrough(
            Supplier::class, // Modelo destino
            Byke::class,     // Modelo intermediario
            'id',            // Clave primaria en Byke
            'id',            // Clave primaria en Supplier
            'byke_id',       // Clave foránea en Purchase
            'supplier_id'    // Clave foránea en Byke
        );
    }
}
