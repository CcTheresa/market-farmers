<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin

            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            //farmer
            [
                'name'=>'farmer',
                'email'=>'farmer@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'farmer',
                'status'=>'active',
            ],

            //vendor
            [
                'name'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'vendor',
                'status'=>'active'
            ]
            ]);
    }
}
