<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $table = 'tariffs';
    use HasFactory;
    //@todo нужно для каждой модели в  массив указать название столбцов которые будут изменять $fillable
   // почитать о этой перемено доку. для чего она нужна
    protected $fillable = ['title'];
}
