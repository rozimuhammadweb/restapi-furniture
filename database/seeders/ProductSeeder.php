<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory()->count(50)->create();


        foreach ($products as $product) {
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 2)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(3, 4)
                    ]
                ]),
            ]);
        }
    }
}
