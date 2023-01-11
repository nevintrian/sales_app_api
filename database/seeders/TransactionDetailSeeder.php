<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::create([
            'transaction_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'discount_first' => 1,
            'discount_second' => 2,
            'subtotal' => 10000
        ]);

        TransactionDetail::create([
            'transaction_id' => 1,
            'product_id' => 2,
            'quantity' => 1,
            'discount_first' => 3,
            'discount_second' => 4,
            'subtotal' => 5000
        ]);

        TransactionDetail::create([
            'transaction_id' => 2,
            'product_id' => 3,
            'quantity' => 2,
            'discount_first' => 5,
            'discount_second' => 6,
            'subtotal' => 20000
        ]);

        TransactionDetail::create([
            'transaction_id' => 2,
            'product_id' => 4,
            'quantity' => 1,
            'discount_first' => 5,
            'discount_second' => 1,
            'subtotal' => 15000
        ]);
    }
}
