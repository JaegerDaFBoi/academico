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
        $users = [
            [
                "name"=>"IronJuan",
                "email"=>"jcamilo2696@gmail.com",
                "password"=>"jcmh2696"
            ],
        ];

        foreach ($users as $user) {
            User::create(
                [
                    'name'=> $user['name'],
                    'email'=>$user['email'],
                    'password'=>Hash::make($user['password']),
                ]
                );
        }
    }
}
