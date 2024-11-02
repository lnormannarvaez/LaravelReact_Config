<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $guardar = [];
    public $timestamp = false;

    public function propietario ()
    {
        return $this-hasMany (Mascota::class);
    }//end-comments
}//Enda-Class
