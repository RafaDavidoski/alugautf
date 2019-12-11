@extends('layouts.app')
@section('title', 'AlugaUTF')


@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/images/qua.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/rep.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/pen.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br>
      <br>
      <br>

      <div class="conteudo">
          <h5> Nossos Imóveis Disponíveis </h5>
      </div>
      <div class="album py-5 bg-light">
            <div class="container">
              <div class="row">
                @foreach ($imovel as $i)
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
                              <button type="" class="btn btn-sm btn-outline-danger"><i class='fas fa-dollar-sign'></i>R${{ $i->valor}}</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
              
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