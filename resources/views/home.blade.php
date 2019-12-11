@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel do Usuário:   Bem vindo <b>{{ Auth::user()->name }}</b> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div class="col d-flex justify-content-center card " style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Cadastrar um novo Imóvel</h5>
                            <br>
                          <p class="card-text">Tem algum imóvel e deseja anunciar exclusivamente para os estudantes? Cadastre ele com a gente! ;)</p>
                          <br>
                          
                          <a type="button" class="btn  btn-dark " href="http://localhost:8000/cadimovel">Cadastrar</a>
                          
                        </div>
                      </div>
                      
                      <div class=" col d-flex justify-content-center card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Todos os Imóveis da Base de Dados</h5>
                          <p class="card-text">Conheça dezenas de imóveis inseridos na nossa base de dados,garanto que irá encontrar algum especial para você!</p>
                          <br>
                          <a type="button" class="btn  btn-dark " href="http://localhost:8000/imoveis">Exibir Imóveis</a>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class=" col d-flex justify-content-center card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Locadores</h5>
                              
                              <p class="card-text">Quer saber algum dado específico de um Locador? Acesse por aqui!</p>
                              <br>
                              <a type="button" class="btn  btn-dark " href="http://localhost:8000/locadores">Ver Mais</a>
                            </div>
                          </div>
                          <div class="col d-flex justify-content-center card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Mensagens</h5>
                              <p class="card-text">Troque Mensagens com os locadores sobre os imóveis que você obteve interesse!</p>
                              <br>
                              <a type="button" class="btn  btn-danger " href="#">Mensagens</a>
                              
                            </div>
                          </div>
                          <div class="col d-flex justify-content-center card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Favoritos</h5>
                                <p class="card-text">Visualize seus Favoritos</p>
                                <br>
                                <br>
                                <br>
                                <br>
                                
                                <a type="button" class="btn  btn-warning " href="http://localhost:8000/favorito">Favoritos</a>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

