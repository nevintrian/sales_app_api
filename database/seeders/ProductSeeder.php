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
            'stock' => 11,
            'price' => 10000,
            'image' => 'biskuat.jpg',
            'sold' => 1
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Oreo',
            'stock' => 7,
            'price' => 15000,
            'image' => 'oreo.jpg',
            'sold' => 3
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Milkuat',
            'stock' => 8,
            'price' => 4000,
            'image' => 'milkuat.jpg',
            'sold' => 5
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Yupi',
            'stock' => 9,
            'price' => 5000,
            'image' => 'yupi.jpg',
            'sold' => 12
        ]);
    }
}
