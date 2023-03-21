<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //*******************************   Users     *************************************************
        User::truncate();
        User::create([
            'name'=>'Yousef Abdelsalam ',
            'address'=>'القاهرة ',
            'email'=>'yousef@gmail.com ',
            'password'=>'0123456789 ',

        ]);
    }
}
