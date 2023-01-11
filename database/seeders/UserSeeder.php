<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'email' => 'manajer@gmail.com',
            'password' => Hash::make('manajer123'),
            'name' => 'manajer',
            'role' => 'manajer'
        ]);

        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'name' => 'admin',
            'role' => 'admin'
        ]);

        User::create([
            'email' => 'brian@gmail.com',
            'password' => Hash::make('brian123'),
            'name' => 'brian',
            'role' => 'sales'
        ]);

        User::create([
            'email' => 'nevin@gmail.com',
            'password' => Hash::make('nevin123'),
            'name' => 'nevin',
            'role' => 'sales'
        ]);
    }
}
