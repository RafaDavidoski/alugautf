<?php

use Illuminate\Database\Seeder;

class LocadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locadors')->insert(['nome' => 'Rafael Davidosiki', 'endereco' => 'Rua Sao Paulo 500 - Centro', 
        'cpflocador'=> '099.552.888-77', 'telefonelocador' => '34241560']);
        DB::table('locadors')->insert(['nome' => 'Vinicius Guilherme', 'endereco' => 'Rua Rio de Janeiro 777 - Centro', 
        'cpflocador'=> '055.552.888-77', 'telefonelocador' => '9999104546']);
        DB::table('locadors')->insert(['nome' => 'Jeff Hardy', 'endereco' => 'Rua Wrestlemania 2009 - Centro', 
        'cpflocador'=> '777.000.888-77', 'telefonelocador' => '4366541212']);
    }
}
