<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '1234567890'; //default password can be updated once logged in

        User::query()->insert(
            [
                ['name' => 'quizmaster', 'email' => 'quizmaster@quiz.com', 'password' => bcrypt($password)],
                ['name' => 'paul', 'email' => 'paul@quiz.com', 'password' => bcrypt($password)],
                ['name' => 'jason', 'email' => 'jason@quiz.com', 'password' => bcrypt($password)],
                ['name' => 'bryan', 'email' => 'bryan@quiz.com', 'password' => bcrypt($password)],
                ['name' => 'arnaud', 'email' => 'arnaud@quiz.com', 'password' => bcrypt($password)],
                ['name' => 'john', 'email' => 'john@quiz.com', 'password' => bcrypt($password)]
            ]
        );
    }
}
