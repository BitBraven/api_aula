<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Disciplina;

class ApiController extends Controller
{
     #region PESSOAS
    public function GetPessoa($id){

    }

    public function GetPessoas(){

    }

    public function CreatePessoa(Request $request)
    {
        $novaPessoa = new Pessoa;
        $novaPessoa->nome = $request->nome;
        $novaPessoa->email = $request->email;
        $novaPessoa->telefone = $request->telefone;
        $novaPessoa->save();

        return response()->json([
            "message"=> "Pessoa criada com sucesso!"
        ], 201);
    }

    public function UpdatePessoa(Request $request, $id)
    {

    }

    public function DeletePessoa($id)
    {

    }
    #endregion

    #region DISCIPLINAS
    public function GetDisciplina($id){

    }

    public function GetDisciplinas(){

    }

    public function CreateDisciplina(Request $request)
    {
        $novaDisciplina = new Disciplina;
        $novaDisciplina->nome = $request->nome;
        $novaDisciplina->descricao = $request->descricao;
        $novaDisciplina->save();

        return response()->json([
            "message"=> "Disciplina criada com sucesso!"
        ], 201);
    }

    public function UpdateDisciplina(Request $request, $id)
    {

    }

    public function DeleteDisciplina($id)
    {
        
    }
    #endregion
}
