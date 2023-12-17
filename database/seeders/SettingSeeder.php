<?php

namespace Database\Seeders;

use App\Enum\SettingTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingSeeder::create([
             'name' => [
                'uz' => 'Til',
                'ru' => 'Lang'
             ],
             'type' => SettingTypes::SELECT->value
        ]);
    }
}
