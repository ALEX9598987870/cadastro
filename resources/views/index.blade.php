@extends('layout.app')

@section('body')
    <div class="jumbotron bg-light border border-secondary" style="margin-top: 20px;">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produtos</h5>
                        <p class="card-text">
                                Incêndio no canavial
                                apaga tudo o bem e o mal
                                tira tudo da memória
                        </p>
                        <a href="/produtos" class="btn btn-primary">cadastrar produtos</a>
                    </div>
                </div>
                
                <div class="card border border-primary">
                        <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card-text">
                                    Incêndio no canavial
                                    apaga tudo o bem e o mal
                                    tira tudo da memória
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/categorias" class="btn btn-primary btn-sm">cadastrar categorias</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection