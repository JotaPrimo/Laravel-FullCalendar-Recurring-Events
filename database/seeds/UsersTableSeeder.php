<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'gestald118@gmail.com',
                'password'       => Hash::make(12345678),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
