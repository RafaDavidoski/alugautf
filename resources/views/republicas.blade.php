@extends('layouts.app')
@section('title', 'AlugaUTF')


@section('content')
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Repúblicas Disponíveis </h1>
          <p class="lead text-muted">Quer morar com os amigos ou quer entrar em alguma Rep e não sabe onde procurar,vem com a gente,da uma olhada nesses anúncios.</p>
        </div>
      </section>


    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          @foreach ($imovel as $i)
          @if ($i->tipo == 'Republica') 
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$i->foto}}">
            <div class="card-body">
              <p class="card-text"> {{ $i->nome}}</p>
              <p class="card-text"><i class='fas fa-home'></i> {{ $i->tipo}}</p>
              <p class="card-text"><i class='fas fa-bed'></i> {{ $i->nquartos}}</p>
              <p class="card-text"><i class='fas fa-car'></i>{{ $i->ngaragem}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="/imoveis/{{$i->id}}">Detalhes</a>
                <form>
                  @csrf
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn btn-sm btn-outline-danger"><i class='fas fa-dollar-sign'></i>R${{ $i->valor}}</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
          @endif
        @endforeach
    </div>
  </div>
</div>
    


<footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Voltar para cima</a>
          </p>
          <p>©2019 AlugaUTF</p>
        </div>
      </footer>
@endsection 