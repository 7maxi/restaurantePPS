<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['mesa_id', 'nombre', 'email', 'telefono', 'fecha_inicio', 'fecha_fin', 'numero_comensales'];
    protected $dates = ['fecha_inicio', 'fecha_fin'];
    
    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($reserva) {
            $reserva->fecha_fin = Carbon::parse($reserva->fecha_inicio)->addHour();
        });
    }
}
