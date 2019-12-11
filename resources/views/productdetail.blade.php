
@extends('layouts.app')
@section('title', 'AlugaUTF')
@section('content')

	<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$imovel->nome}}
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$imovel->foto}}" alt="">
      </div>
  
      <div class="col-md-4">
           <h6> <form action="{{route('favorito.store')}}" id="contact_form" method="post">
                {{csrf_field()}}
                <input name="imovel_id" type="hidden" value="{{$imovel->id}}" />
           </h6>
                <button type="submit" class="btn btn-primary btn-warning" onclick="fav()">Adicionar aos Favoritos</button> 
              </form>
          
        <h3 class="my-3">Descrição </h3>
        <p>{{$imovel->descricao}}</p>
        <h3 class="my-3">Características do Imóvel</h3>
        <ul>
          <li>Tipo do Imóvel: {{$imovel->tipo}}</li>
          <li>Endereço da Moradia: {{$imovel->endereco}}</li>
          <li>Número de Quartos: {{$imovel->nquartos}}</li>
          <li>Número de Banheiros: {{$imovel->nbanheiros}}</li>
          <li>Vagas na Garagem: {{$imovel->ngaragem}}</li>
          <br>
          <button type="button" class="btn btn-success">R$ {{$imovel->valor}}</button>
        </ul>
        <h4 class="my-4">Informações do Locador</h4>
          <ul>
          <li> 
              <a target="_new" href="https://wa.me/55{{preg_replace('/\D/', '', $imovel->locador->telefonelocador)}}" class="btn btn-primary fa fa-phone"> {{$imovel->locador->telefonelocador}} </a> {{$imovel->locador->nome}} </li>
          </ul>
      </div>
  
    </div>
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Imóveis Relacionados</h3>
    <div class="row">
        @forelse($related as $relatede)
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="{{$relatede->id}}">
            <img class="img-fluid" src="/storage/{{$relatede->foto}}" alt="">
            <p> {{$relatede->nome}} </p>
          </a>
        </div>  
        @empty
        <p>Nenhum  tipo de imóvel cadastrado!</p>
        @endforelse
    </div>
    <!-- /.row -->
  
  </div>
  <!-- /.container -->
        
        <footer class="text-muted">
            <div class="container">
              <p class="float-right">
                <a href="#">Voltar para cima</a>
              </p>
              <p>©2019 AlugaUTF</p>
            </div>
          </footer>
    @endsection 
    