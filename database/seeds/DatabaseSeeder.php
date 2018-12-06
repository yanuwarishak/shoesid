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
        DB::table('users')->insert([
            'name' => "Wakai",
            'email' => "wakai@gmail.com",
            'password' => bcrypt('secret'),
            'type' => "admin",
            'created_at' => '2017-11-05 04:15:45',
            'updated_at' => '2017-11-05 04:15:45',
        ]);
    }
}
