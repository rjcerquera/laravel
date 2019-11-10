<?php

use App\Sede;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['sede' => 'SEDE 1'],
            ['sede' => 'SEDE 2'],
            ['sede' => 'SEDE 3'],

        ];

        foreach ($data as $registro) {
            Sede::create($registro);
        }
    }
}
