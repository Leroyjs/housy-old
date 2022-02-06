<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MainInfoBlock extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'info',
        'url_text',
        'url',
        'is_shown',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('img')
            ->singleFile();
    }
}
