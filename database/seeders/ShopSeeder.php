<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'name' => 'Toko Andri',
            'address' => 'Jalan dringu probolinggo'
        ]);

        Shop::create([
            'name' => 'Toko Barokah',
            'address' => 'Jalan gunung kidul probolinggo'
        ]);
    }
}

