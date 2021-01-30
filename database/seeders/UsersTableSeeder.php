<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            //default admin
            'username' => 'admin',
            'email' => 'admin@praxxys.ph',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
