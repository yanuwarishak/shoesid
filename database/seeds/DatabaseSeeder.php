<?php

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

               // $this->call(UsersTableSeeder::class);
        //1
        DB::table('users')->insert(
            ['name' => "Wakai",
            'email' => "wakai@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-11-05 04:15:45',
            'updated_at' => '2017-11-05 04:15:45',]
        );
        //2
        DB::table('users')->insert(
            ['name' => "Ardiles",
            'email' => "ardiles@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-12-05 04:15:45',
            'updated_at' => '2017-12-05 04:15:45',]
        );
        //3
        DB::table('users')->insert(
            ['name' => "Carvil",
            'email' => "carvil@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-12-04 04:15:45',
            'updated_at' => '2017-12-04 04:15:45',]
        );
        //4
        DB::table('users')->insert(
            ['name' => "Eagle",
            'email' => "eagle@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-11-11 05:15:45',
            'updated_at' => '2017-11-11 07:16:45',]
        );
        //5
        DB::table('users')->insert(
            ['name' => "Bro.Do",
            'email' => "brodo@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-11-11 05:15:45',
            'updated_at' => '2017-11-11 07:16:45',]
        );
        //6
        DB::table('users')->insert(
            ['name' => "Kasogi",
            'email' => "kasogi@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2016-11-12 05:15:45',
            'updated_at' => '2016-11-12 07:16:45',]
        );
        //7
        DB::table('users')->insert(
            ['name' => "Yongki Komaladi",
            'email' => "yongki@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2018-12-12 05:15:45',
            'updated_at' => '2018-12-12 06:36:45',]
        );
        //8
        DB::table('users')->insert(
            ['name' => "Tomkins",
            'email' => "tomkins@exmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2016-12-12 05:15:45',
            'updated_at' => '2016-12-12 06:36:45',]
        );
    }
}
