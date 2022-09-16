<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'bingus@mingusnet.org',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'email' => 'janemane@email.com',
            'password' => Hash::make('password123')
        ]);
        DB::table('guests')->insert([
            'user_id' => 1,
            'firstname' => 'Bingus',
            'lastname' => 'Mingus',
            'dateofbirth' => '1978/03/23'
        ]);
        DB::table('guests')->insert([
            'user_id' => 2,
            'firstname' => 'Jane',
            'lastname' => 'Mane',
            'dateofbirth' => '1998/04/16'
        ]);
        DB::table('subscription_types')->insert([
            'name' => "Eens per week",
            'totalvisits' => '1'
        ]);
        DB::table('subscription_types')->insert([
            'name' => "Twee keer per week",
            'totalvisits' => '2'
        ]);
        DB::table('subscription_types')->insert([
            'name' => "Onbeperkt",
            'totalvisits' => '999999'
        ]);
        DB::table('subscriptions')->insert([
            'guest_id' => 1,
            'subscription_type_id' => 1,
            'startdate' => '2022/09/01',
            'enddate' => '2022/10/01'           
        ]);
        DB::table('course_types')->insert([
            'name' => 'Paaldansen'
        ]);
        DB::table('course_types')->insert([
            'name' => 'Yoga'
        ]);
        DB::table('course_types')->insert([
            'name' => 'Pilates'
        ]);
    }
}
