@extends('layout.app')

@section('body')

    <div class="card border" style="margin-top: 20px;">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">categoria</label>
                <input type="text" class="form-control" value="{{$categoria != null? $categoria->nome : null}}"
                    name="nomeCategoria" id="nome" placeholder="Informe nova categoria"/>
                </div>
                    <button type="submit" class="btn btn-success btn-sm">salvar</button>
                    <button type="submit" class="btn btn-danger btn-sm ">cancelar</button>
                
            </form>
        </div>

        <div class="card-footer">
                all rights reserved
        </div>
    </div>
    

@endsection