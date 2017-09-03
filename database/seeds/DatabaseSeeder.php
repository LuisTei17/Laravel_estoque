<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run(){

        DB::insert('insert into produtos 
        (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Fogao', 5, 890.3, 'Fogao preto'));

        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao) values(?,?,?,?)', array('Geladeira', 3, 570.20, 'Geladeira branca'));

        DB::insert('insert into produtos
        (nome, quantidade, valor, descricao) values(?,?,?,?)', array('Microondas', 3, 300, 'Microondas amarelo'));
    }
}