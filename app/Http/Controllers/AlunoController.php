<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index',[
            'alunos'=>$alunos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create',[
            'aluno'=> new Aluno,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlunoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunoRequest $request)
    {
        //dd($request->nome);
        $aluno = new Aluno;
        $aluno->dtinclus= $request->dtinclus;
        $aluno->nusp = $request->nusp;
        $aluno->nome = $request->nome;
        $aluno->bloco = $request->bloco;
        $aluno->apto = $request->apto;
        $aluno->quarto = $request->quarto;
        $aluno->save();
        //return redirect("/alunos/{$aluno->id}");
        return redirect("/alunos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show',[
            'aluno'=>$aluno
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit',[
            'aluno'=> $aluno
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunoRequest  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlunoRequest $request, Aluno $aluno)
    {
        $aluno->dtinclus= $request->dtinclus;
        $aluno->nusp = $request->nusp;
        $aluno->nome = $request->nome;
        $aluno->bloco = $request->bloco;
        $aluno->apto = $request->apto;
        $aluno->quarto = $request->quarto;
        $aluno->save();
        return redirect("/alunos/{$aluno->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect('alunos');
    }
}
