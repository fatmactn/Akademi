<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Servislet',
            'email' => 'servislet@servislet.com',
            'status' => 1,
            'password' => Hash::make('servislet2021')
        ]);
    }
}
