<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i = 0; $i <10000; $i++)
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(5).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
        ]);
    }
} 
