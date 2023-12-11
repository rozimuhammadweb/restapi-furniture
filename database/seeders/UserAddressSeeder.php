<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(2)->addresses()->create([
            "latitude" => "40.23.2301.023",
            "longitude" => "69.49.42239.2393",
            "region" => "Tashkent",
            "district" => "Mirabad",
            "street" => "O'rda",
            "home" => "33"
        ]);

        User::find(2)->addresses()->create([
            "latitude" => "40.23.2301.23",
            "longitude" => "69.49.42239.23",
            "region" => "Tashkent",
            "district" => "Shayxontoxur",
            "street" => "O'rda 2k2",
            "home" => "60"
        ]);
    }
}
