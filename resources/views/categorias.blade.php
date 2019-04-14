@extends('layout.app')

@section('body')

<div class="card border" style="margin-top: 20px;">
    <div class="card-body">
        <h5 class="card-title"> cadastro de categorias</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
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
                            <a href="/categorias/editar/{{'id'}}" class="btn btn-success btn-sm">editar</a>
                            <a href="/categorias/excluir/{{'id'}}" class="btn btn-danger btn-sm">excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection