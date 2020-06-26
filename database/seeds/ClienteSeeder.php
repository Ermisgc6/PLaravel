<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'Nombres' => 'Keity',
            'Apellidos' => 'Guerrero Castillo',
            'Correo' => 'Keity@gmail.com',
        ]);
    }
}
