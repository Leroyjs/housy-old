<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particle extends Model
{
    use HasFactory;

    public function particleType()
    {
        return $this->belongsTo(ParticlesType::class, 'particle_type_id');
    }
}
