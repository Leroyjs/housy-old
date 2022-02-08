<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    const PAGE_ABOUT = 'О компании';
    const PAGE_TYPICAL_PROJECTS = 'Типовые проеты';
    const PAGE_PORTFOLIO = 'Портфолио';
    const PAGE_SALE = 'В продаже';
    const PAGE_BUILDING = 'Строительство дома';
    const PAGE_PAY = 'Оплата';
    const PAGE_CONTACT = 'Контакты';

    use HasFactory;

    protected $fillable = [
        'title',
        'fields'
    ];

    protected $casts = [
        'fields' => 'array'
    ];
}
