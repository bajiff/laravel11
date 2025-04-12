<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  

    public function run(): void
    {
        User::create([
            'name' => 'Baji Ajalah',
            'username' => 'baji-ajalah',
            'email' => 'bajiajalah@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('cobain'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(5)->create();
    }
}
