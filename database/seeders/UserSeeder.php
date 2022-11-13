<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
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
        Admin::create([
            'name' => 'Kwame Pillar',
            'email' => 'kwamepillar@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Customer::create([
            'name' => 'Jimmy',
            'email' => 'jimmy@example.com',
            'password' => Hash::make('password'),
        ]);

        Customer::factory()->count(10)->create();
    }
}
