<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@try.com',
            'password'=>Hash::make('cobalagi'),
            'phone_number'=>'081322223333',
            'avatar'=>'',
            'role'=>'admin',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
