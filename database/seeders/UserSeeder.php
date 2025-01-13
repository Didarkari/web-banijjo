<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $data = new User();
            $data->name = 'admin';
            $data->email = 'admin@gmail.com';
            $data->password = Hash::make('123456');

            $data->save();


            $data = new User();
            $data->name = 'customer';
            $data->email = 'customer@gmail.com';
            $data->user_type = 'customer';
            $data->email_verified_at = date('Y-m-d H:i:s');
            $data->password = Hash::make('123456');

            $data->save();

    //     DB::table('users')->insert([
    //         'name' => 'admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => Hash::make('project123'),
    //     ]);

    //    User::insert([
    //         'name' => 'admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => Hash::make('project123'),
    //     ]);
    }
}
