<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Bepul',
                'ru' => 'Бесплатно'
            ],
            'estimated_time' => [
                'uz' => '7 kun',
                'ru' => '7 дня',
            ],
            'price' => 0
        ]);
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standard',
                'ru' => 'Стандартный'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 дня',
            ],
            'price' => 50000
        ]);
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'Быстрый'
            ],
            'estimated_time' => [
                'uz' => '2 kun',
                'ru' => '2 дня',
            ],
            'price' => 1000000
        ]);
    }
}
