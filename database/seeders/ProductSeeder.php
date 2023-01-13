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
        Product::create([
            'category_id' => 1,
            'name' => 'Biskuat',
            'price_pcs' => 10000,
            'price_pack' => 200000,
            'status' => 1,
            'image' => 'biskuat.jpg',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Oreo',
            'price_pcs' => 15000,
            'price_pack' => 200000,
            'status' => 1,
            'image' => 'oreo.jpg',
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Milkuat',
            'price_pcs' => 4000,
            'price_pack' => 150000,
            'status' => 0,
            'image' => 'milkuat.jpg',
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Yupi',
            'price_pcs' => 5000,
            'price_pack' => 100000,
            'status' => 1,
            'image' => 'yupi.jpg',
        ]);
    }
}
