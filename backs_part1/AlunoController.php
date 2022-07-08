<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        $alunos= Aluno::all();
        return view('alunos.index',[
            'alunos'=>$alunos
        ]);
    }
    public function show($nusp){
        $aluno = Aluno::where('nusp',$nusp)->first();
        return view('alunos.show',[
            'aluno'=>$aluno
        ]);
    }
}
