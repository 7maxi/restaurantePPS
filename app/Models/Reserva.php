<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['mesa_id', 'nombre', 'email', 'telefono', 'fecha_inicio', 'fecha_fin', 'numero_comensales'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($reserva) {
            $reserva->fecha_fin = date('Y-m-d H:i:s', strtotime($reserva->fecha_inicio . ' +1 hour'));
        });
    }
}
