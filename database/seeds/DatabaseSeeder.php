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
         $this->call(UsersTableSeeder::class);
         $this->call(GradosSeeder::class);
         $this->call(JornadaSeeder::class);
         $this->call(SedeSeeder::class);
         $this->call(UserInformationSeeder::class);
    }
}
