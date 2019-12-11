@extends('layouts.app')
@section('title', 'AlugaUTF')

@section('content')
<div class="card border">
    <div class="card-body">
        <form action="/locadores/{{$locador->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeLocador"> Nome: </label>
                <input type="text" class="form-control" name="nomeLocador" value="{{$locador->nome}}" id="NomeLocador" placeholder="Ex: Rafael Silva">
                <label for="endLocador"> Endereço: </label>
                <input type="text" class="form-control" name="endLocador" value="{{$locador->endereco}}" id="endLocador" placeholder="Ex: Rua Goias 435">
                <label for="cpfLocador"> CPF: </label>
                <input type="text" class="form-control" name="cpfLocador" value="{{$locador->cpflocador}}" id="cpfLocador" placeholder="Ex: 000.000.000-00">
                <label for="telLocador"> Telefone: </label>
                <input type="text" class="form-control" name="telLocador" value="{{$locador->telefonelocador}}" id="telLocador" placeholder="Ex: (99)99999-9999">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar Locador</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
        </div>        
</div>
@endsection 