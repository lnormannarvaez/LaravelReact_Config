<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $guardar = [];

    public function propietario ()
    {
        return $this->belongsTo (Mascota::class);
    }//End-propietario
}//End-class
