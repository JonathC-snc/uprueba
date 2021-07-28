<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'pais';
    protected $primary_key = 'id_pais';
    protected $guarded = [];

    public function ciudades(){
        return $this->hasMany(Ciudad::class,'id_ciudad');
    }
}
