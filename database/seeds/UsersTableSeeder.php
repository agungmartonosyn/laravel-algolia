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
        $addUser = new User();
        $addUser->name = 'Admin';
        $addUser->email = 'admin@admin.com';
        $addUser->password = bcrypt('password');
        $addUser->save();
    }
}
