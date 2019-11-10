<?php

use App\Jornada;
use Illuminate\Database\Seeder;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jornada' => 'MAÑANA'],
            ['jornada' => 'TARDE'],
            ['jornada' => 'NOCHE'],

        ];

        foreach ($data as $registro) {
            Jornada::create($registro);
        }
    }
}
