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
        $categoria = new Categoria();
        return view('novacategoria', compact('categoria'));
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
        $categoria = Categoria::find($id);
        if(isset($categoria)){
            return view('novacategoria', compact('categoria'));
        }
        return redirect('/categorias');
    }

    public function update(Request $request, $id){
        
    }
    public function destroy($id){
        $categoria = Categoria::find($id);
            $categoria->delete();
        return redirect('/categorias');
    }
}
