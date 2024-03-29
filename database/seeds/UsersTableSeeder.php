<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 10)->create();

        User::create([
            'email' => "jacerquera021@misena.edu.co",
            'password' => bcrypt('123456')
        ]);

    }
}
