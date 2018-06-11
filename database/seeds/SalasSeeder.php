<?php

use Illuminate\Database\Seeder;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert(
            [
                'num_sala' => '1',
                'cupo_maximo' => '100',
            ],
            [
                'num_sala' => '2',
                'cupo_maximo' => '75',
            ],
            [
                'num_sala' => '3',
                'cupo_maximo' => '50',
            ],
            [
                'num_sala' => '4',
                'cupo_maximo' => '25',
            ],
            [
                'num_sala' => '5',
                'cupo_maximo' => '10',
            ]
        );
    }
}
