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
        DB::table('salas')->insert([
                'num_sala' => 6,
                'cupo_maximo' => '125',
            ]
        );
    }
}
