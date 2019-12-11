<?php

use Illuminate\Database\Seeder;

class ImovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imovels')->insert(['nome' => 'Republica 70', 'tipo' => 'Pensionato', 
        'telefone'=> '0', 'endereco' => 'Rua Edson','valor'=>100.00,'descricao'=>'null','ngaragem'=>'1','nquartos'=>'1','nbanheiros'=>'2','foto'=>'null
        ', 'locador_id'=> 1]);
        DB::table('imovels')->insert(['nome' => 'Republica 80', 'tipo' => 'Pensionato', 
        'telefone'=> '00000', 'endereco' => 'Rua Tedy - Centro','valor'=>500.00,'descricao'=>'null','ngaragem'=>'2','nquartos'=>'3','nbanheiros'=>'2','foto'=>'null
        ', 'locador_id'=> 2]);
        
    }
}
