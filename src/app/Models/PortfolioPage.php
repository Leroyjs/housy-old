<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioPage extends Model
{
    use HasFactory;

    protected $casts = [
        'info' => 'array',
    ];

    protected $fillable = ['title', 'info'];
}
