<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'username' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'id' => 1,
        //     'name' => 'Administrator',
        //     'username' => 'administrator',
        //     'email' => 'administrator@app.com',
        //     'password' => Hash::make('1234'),
        //     'created_at' => '2021-06-25 05:47:42',
        //     'updated_at' => '2021-06-25 05:47:42'
        // ]);

        // DB::table('roles')->insert([
        //     'id' => 1,
        //     'name' => 'Administrator',
        //     'guard_name' => 'web',
        //     'created_at' => '2021-06-25 05:47:42',
        //     'updated_at' => '2021-06-25 05:47:42'
        // ]);

        $path = public_path('../database/seeders/sql/z_app_v3_seed.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}