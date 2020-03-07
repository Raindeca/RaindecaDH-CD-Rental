<?php

use Illuminate\Database\Seeder;

class CdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
            ->table('cd')
            ->insert([
                'title' => 'AD_HOUSE4',
                'rate' => '2500',
                'category' => 'House',
                'quantity' => 3
            ]);
       
            
        app('db')
            ->table('cd')
            ->insert([
                'title' => 'The Asterisk War Soundtrack',
                'rate' => '1200',
                'category' => 'EDM',
                'quantity' => 1
            ]);

        app('db')
            ->table('cd')
            ->insert([
                'title' => 'GRANRODEO – TRASH CANDY',
                'rate' => '1000',
                'category' => 'Jpop',
                'quantity' => 2
            ]);
    }
}
