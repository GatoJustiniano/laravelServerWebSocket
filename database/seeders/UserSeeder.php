<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Alvaro Justiniano',
            'email' => 'andres@gmail.com',
            'password' => 'admin5095',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
