<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $pages = [
        'О компании',
        'Типовые проеты',
        'Портфолио',
        'В продаже',
        'Строительство дома',
        'Оплата',
        'Контакты',
    ];

    public function run()
    {
        collect($this->pages)
            ->each(fn($page) => Page::create([
                'title' => $page,
            ]));
    }
}
