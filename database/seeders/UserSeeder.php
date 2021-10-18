<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
      DB::table('users')->insert([
        'name' => 'subhadip nandi',
        'email' => 'care.snandi@gmail.com',
        'password' => Hash::make('12345'),
        'hardware-id' => '1234-dev-001'
      ]);
    }
}
