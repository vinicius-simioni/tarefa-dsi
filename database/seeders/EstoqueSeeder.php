<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstoqueSeeder extends Seeder
{



    public function run(): void
    {

        $produtos = [
            'Livro', 
            'Pilha',
            'Caneta',
            'Tênis',
            'Relógio',
            'Calça',
            'Sabão em Pó',
            'Lâmpada',
            'Controle',
            'Ventilador',
            'Microondas',
            'Chaleira',
            'Notebook',
            'Pasta',
            'Fone de Ouvido',
        ];

        DB::table('estoques')->insert([
            'nome' => $produtos[rand(0, 14)],
            'quantidade' => rand(1, 25),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
