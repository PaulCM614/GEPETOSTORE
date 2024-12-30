<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'byke_id',
        'user_id',
        'customer_id',
        'cantidad',
        'precio_unitario',
        'total',
    ];

    // Relación con el modelo Byke
    public function byke()
    {
        return $this->belongsTo(Byke::class);
    }

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
