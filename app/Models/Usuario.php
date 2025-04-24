<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'telefono', 'rol_id'];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
