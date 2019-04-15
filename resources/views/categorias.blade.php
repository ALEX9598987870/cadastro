@extends('layout.app')

@section('body')

<div class="card border" style="margin-top: 20px;">
    <div class="card-body">
        <h5 class="card-title"> cadastro de categorias</h5>

        @if (count($categorias) > 0)
            <table class="table table-ordered table-hover table-striped table-bordered">
                <thead>
                    <tr class="thead-dark">
                        <th>codigo</th>
                        <th>nome</th>
                        <th>ações</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nome}}</td>
                            <td>
                                <a href="/categorias/editar/{{$categoria->id}}" class="btn btn-outline-success btn-sm">editar</a>
                                <a href="/categorias/excluir/{{$categoria->id}}" class="btn btn-outline-danger btn-sm">excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        
    </div>
    <div class="card-footer">
        <a href="/categorias/novo" class="btn btn-success btn-sm">Nova categoria</a>
    </div>
</div>
@endsection