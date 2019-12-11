
@extends('layouts.app')
@section('title', 'AlugaUTF')
@section('content')
<div>
<h3> Seus Favoritos </h3>
        
        <table class="table table-ordered table-hover">
          <thead>
              <th>Nome Imovel</th>
              <th>Tipo do Imovel</th>
              <th>Endereço</th>
              <th>Link Imovel</th>
          </thead>
         <tbody>
            @if (Auth::user()->favorito->count() )
            @foreach ($favoritos as $favorito)
            <tr>
            <td>{{$favorito->imovel->nome}}</td>
            <td>{{$favorito->imovel->tipo}}</td>
            <td>{{$favorito->imovel->endereco}}</td>
            <td>
                <a type="button" class="btn btn-sm btn-outline-secondary" href="/imoveis/{{$favorito->imovel->id}}">Link</a>
            </td>
          </tr>
          @endforeach
          @endif
         </tbody>      
        </table>
        @endsection 