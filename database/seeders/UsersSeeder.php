<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Braniel',
            'lastname'=>'Tovar',
            'email'=>'idanny@email.com',
            'password'=>Hash::make('Dantov11!'),
            'birthday'=>'2002-02-11',
            'created_at'=>now(),
            'email_verified_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Mich',
            'lastname'=>'Murillo',
            'email'=>'Mich@email.com',
            'password'=>Hash::make('MichMur01!'),
            'birthday'=>'2002-08-13',
            'created_at'=>now(),
            'email_verified_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Claudio',
            'lastname'=>'Moreno',
            'email'=>'Cmarquez@email.com',
            'password'=>Hash::make('Marquez01!'),
            'birthday'=>'2002-03-08',
            'created_at'=>now(),
            'email_verified_at'=>now(),
        ]);
    }
}
