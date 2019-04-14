<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class ControladorCategoria extends Controller
{

    public function index(){
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    public function create(){
        return view('novacategoria');
    }
    
    public function store(Request $request){
        $categoria = new Categoria();
        $categoria->nome = $request->input('nomeCategoria');
        $categoria->save();
        return redirect('/categorias');
    }

    public function show($id){
        
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }
    public function destroy($id){
        
    }
}
