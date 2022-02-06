<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MainPage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'slider' => 'array',
        'info' => 'array',
    ];
    protected $fillable = ['title', 'slider', 'info'];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main-slider')
            ->singleFile();
        $this->addMediaCollection('info-img')
            ->singleFile();
    }

}
