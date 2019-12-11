@extends('layouts.app')
@section('title', 'AlugaUTF')
@section('content')
<div>
<h3> Imoveis Específicos Cadastrados pelo Locador </h3>

        <h4 class="my-4">{{$locador->nome}}</h4>
        
        <table class="table table-ordered table-hover">
          <thead>
              <th>Nome Imovel</th>
              <th>Tipo do Imovel</th>
              <th>Endereço</th>
              <th>Link Imovel</th>
          </thead>
         <tbody>
            @foreach ($locador->imovels as $l)
            <tr>
            <td>{{$l->nome}}</td>
            <td>{{$l->tipo}}</td>
            <td>{{$l->endereco}}</td>
            <td>
                <a type="button" class="btn btn-sm btn-outline-secondary" href="/imoveis/{{$l->id}}">Link</a>
            </td>
          </tr>
          @endforeach
         </tbody>


          
        </table>

      
<footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Voltar para cima</a>
          </p>
          <p>©2019 AlugaUTF</p>
        </div>
      </footer>
@endsection 