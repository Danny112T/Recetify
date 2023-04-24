<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
        ]);

        DB::table('users')->insert([
            'name'=>'Braisak',
            'lastname'=>'Chantillan',
            'email'=>'Braisak182@email.com',
            'password'=>Hash::make('Braisak182!'),
            'birthday'=>'2002-12-21',
            'created_at'=>now(),

        ]);
    }
}
