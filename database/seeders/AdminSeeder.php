<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin.spprt@gmail.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('F-MUvFU@fvC-x4g'),
            'remember_token' => Str::random(10),
        ]);
    }
}
