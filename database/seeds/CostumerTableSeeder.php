<?php

use Illuminate\Database\Seeder;

class CostumerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
        ->table('costumer')
        ->insert([
            'fname' => 'Raindeca Dzulikrom',
            'lname' => 'Haqqu',
            'phone' => '087780719069',
            'address' => 'Jl. Ganesha III Blok UD2 No.6 Pondok Benda, Pamulang',
            'city' => 'Tangerang Selatan',
            'poBox' => '15416'
        ]);

    }
}
