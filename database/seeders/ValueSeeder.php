<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::created([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'ru' => 'Красный'
            ]
        ]);

        Value::created([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'ru' => 'Черный'
            ]
        ]);

        Value::created([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);

        Value::created([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП'
            ]
        ]);
    }
}
