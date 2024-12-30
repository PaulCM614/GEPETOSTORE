<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    protected $fillable = ['nombre','apellido','email','telefono','direccion'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

}
