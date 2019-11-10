<?php

use App\Grado;
use Illuminate\Database\Seeder;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['grado' => 'PRIMERO'],
            ['grado' => 'SEGUNDO'],
            ['grado' => 'TERCERO'],
            ['grado' => 'CUARTO'],
            ['grado' => 'QUINTO'],
            ['grado' => 'SEXTO'],
            ['grado' => 'SEPTIMO'],
            ['grado' => 'OCTAVO'],
            ['grado' => 'NOVENO'],
            ['grado' => 'DECIMO'],
            ['grado' => 'ONCE'],
        ];

        foreach ($data as $registro) {
            Grado::create($registro);
        }
    }
}
