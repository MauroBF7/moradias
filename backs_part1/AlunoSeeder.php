<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aluno = [
            'dtinclus'=> "2022-06-12",
            'nusp'=> "2587452",
            'nome'=> "Fulano da Silva",
            'bloco'=> "E",
            'apto'=> "205",
            'quarto'=>"2"
        ];
        Aluno::create($aluno);
        Aluno::factory(150)->create();
    }
}
