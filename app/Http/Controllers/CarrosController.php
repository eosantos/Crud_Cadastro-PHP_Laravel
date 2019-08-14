<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carro;

class CarrosController extends Controller
{
    public function criarcarros (){
        return view('CadastraCarros');
    }

    public function salvarCarros (){
        $marca = request()->marca;
        $renavam = request()->renavam;
        $placa = request()->placa;
        $carros = carro::create(['marca'=>$marca, 'renavam'=>$renavam, 'placa'=>$placa]);
        return redirect('listarCarros');
    }

    public function listarCarros (){
        $carros = carro::all();
        return view('listarCarros',compact('carros'));
    }

    public function editarCarros (){
        $carros = carro::find(request()->id);
        return view('editarCarros',compact('carros'));
    }

    public function atualizarCarros (){
        $carros = carro::find(request()->id);
        $carros->marca = request()->marca;
        $carros->renavam = request()->renavam;
        $carros->placa = request()->placa;
        $carros->save();
        return redirect('listarCarros');
    }

    public function deleteCarros($id){
        $carros = carro::destroy($id);
        return redirect('listarCarros');
    }

}
