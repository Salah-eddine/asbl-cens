<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" =>"Houry Khalid",
            "email" => "h.khalid@cens.com",
            "password" =>bcrypt("cornichon"),
        ]);
    }
}
