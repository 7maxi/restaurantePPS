<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mesa extends Model
{
    use HasFactory;

    protected $fillable = ['numero_sillas', 'zona_id'];

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
