<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }
}
