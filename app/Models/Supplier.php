<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    //

    protected $fillable = ['nombre', 'email', 'pagina_web', 'pais'];

    public function bykes()
    {
        return $this->hasMany(Bicycle::class);
    }
}
