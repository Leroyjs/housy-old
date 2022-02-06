<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'fields' => 'array'
    ];
    protected $fillable = ['title', 'fields'];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main-slider')
            ->singleFile()
        ;
        $this->addMediaCollection('info-img')
            ->singleFile();
    }

}
