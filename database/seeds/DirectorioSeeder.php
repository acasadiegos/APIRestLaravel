<?php

use Illuminate\Database\Seeder;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directorios')->insert([
            [
                'nombre' => 'Saul Mamani M',
                'direccion' => 'Plan 500, Oruro',
                'telefono' => 76137269,
                'foto' => null
            ],
            [
                'nombre' => 'Lidia Marce',
                'direccion' => 'Plan 300, Santa Cruz',
                'telefono' => 76137245,
                'foto' => null
            ]
        ]);
    }
}
