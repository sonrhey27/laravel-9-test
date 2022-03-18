<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => "te",
			'email' => "te@mail.com",
            'password' => bcrypt('password@123'), // Can also be used Hash::make('password@123')
            'email_verified_at' => now()
        ]);
        //
    }
}
