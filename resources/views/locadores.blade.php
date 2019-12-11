@extends('layouts.app')
@section('title', 'AlugaUTF')

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title"> Locadores do Sistema </h5>
        @if(count($locador)> 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Locador</th>
                    <th>Telefone</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locador as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->telefonelocador}}</td>
                        <td> 
                            <a href="/locadoress/{{$item->id}}" class="btn btn-sm btn-primary"> Ver Imóveis Disponíveis </a>
                            <a href="/locadores/editar/{{$item->id}}" class="btn btn-sm btn-primary"> Editar </a>
                            <a href="/locadores/remover/{{$item->id}}" class="btn btn-sm btn-danger"> Remover </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>
    <div class="card-footer">
        <a href="/locadores/novo" class="btn btn-sm btn-primary" role="button">Novo Locador</a>
    </div>
</div>
@endsection 