<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;

class PessoasController extends Controller
{
    public function criar (){
        return view('welcome');
    }

    public function salvar (){
        $nome = request()->nome .' '. request()->sobrenome;
        $cpf = request()->cpf;
        $dt_nasc = request()->dt_nasc;
        $telefone = request()->telefone;
        $pessoas = Pessoa::create(['nome'=>$nome, 'cpf'=>$cpf, 'dt_nasc'=>$dt_nasc, 'telefone'=>$telefone]);
        return redirect('/listar');
    }

    public function listar (){
        $pessoas = Pessoa::all();
        return view('listar',compact('pessoas'));
    }

    public function editar (){
        $pessoas = Pessoa::find(request()->id);
        $nome = explode(' ', $pessoas->nome);
        $sobrenome = $nome[1];
        $nome = $nome[0];
        return view('editar',compact('pessoas', 'nome', 'sobrenome'));
    }

    public function atualizar (){
        $pessoas = Pessoa::find(request()->id);
        $pessoas->nome = request()->nome .' '. request()->sobrenome;
        $pessoas->cpf = request()->cpf;
        $pessoas->dt_nasc = request()->dt_nasc;
        $pessoas->telefone = request()->telefone;
        $pessoas->save();
        return redirect('/listar');
    }

    public function delete($id){
        $pessoas = Pessoa::destroy($id);
        return redirect('/listar');
    }





}
