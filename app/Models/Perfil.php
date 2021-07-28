<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfil';
    protected $primaryKey = 'id_perfil';
    public $timestamps = false;
    protected $guarded = [];

    public function usuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
