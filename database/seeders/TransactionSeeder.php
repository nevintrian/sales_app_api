<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'user_id' => 1,
            'shop_id' => 1,
            'invoice_number' => '129411002',
            'total_price' => 10000,
            'tax' => 0,
            'status' => 0
        ]);

        Transaction::create([
            'user_id' => 2,
            'shop_id' => 2,
            'invoice_number' => '129411002',
            'total_price' => 10000,
            'tax' => 0,
            'status' => 0
        ]);
    }
}
