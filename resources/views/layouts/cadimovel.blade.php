@extends('layouts.app')
@section('title', 'AlugaUTF')

@section('content')
<div class="jumbotron bg-light border-secondary">
    <div class="row">
        <div class= "container col-md-8 offset-md-2">
                <div class="card-deck">
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title"> Cadastro de um Novo Imóvel </h5>
                                <form action="/imoveis" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                            <label for="nomeImovel"> Título do Imóvel: </label>
                                            <input type="text" class="form-control {{$errors-> has('nomeImovel') ? 'is-invalid' : ''}} "  name="nomeImovel" id="nomeImovel"
                                             placeholder="Ex: República 70">
    @if($errors->has('nomeImovel'))
                                            <div class="invalid-feedback">
    {{$errors->first('nomeImovel')}}
                                            </div>
    @endif
                                        <label for="tipoImovel"> Locadores do Sistema: </label>
                                        <br>
                                        
                                        <select class="form-control" {{$errors-> has('locador_id') ? 'is-invalid' : ''}} name="locador_id" id="locador_id">
                                            @foreach($locador as $i)
                                                <option value="{{$i->id}}"> {{$i->id}}. {{$i->nome}}</option>
                                            @endforeach
                                            @if($errors->has('endereco'))
                                            <div class="invalid-feedback">
    {{$errors->first('locador_id')}}
                                            </div>
                                        @endif
                                        </select>
                                        <label for="tipoImovel"> Tipo de Moradia: </label>
                                        <br>
                                        <select class="form-control" name="tipoImovel" id="tipoImovel">
                                            <option value="Pensionato">Pensionato</option>
                                            <option value="Quarto Individual">Quarto Individual</option>
                                            <option value="Republica">República</option>
                                        </select>
                                        <br>
                                        <label for="endImovel"> Endereço: </label>
                                        <input type="text" class="form-control {{$errors-> has('endereco') ? 'is-invalid' : ''}} "  name="endereco" id="endereco" placeholder="Ex: Rua Goias 435">
@if($errors->has('endereco'))
                                        <div class="invalid-feedback">
{{$errors->first('endereco')}}
                                        </div>
@endif
                                        <label for="valorImovel"> Valor do Aluguel (R$): </label>
                                        <input type="text" class="form-control" {{$errors-> has('valorImovel') ? 'is-invalid' : ''}} name="valorImovel" id="valorImovel" placeholder="700.00">
                                        @if($errors->has('valorImovel'))
                                        <div class="invalid-feedback">
{{$errors->first('valorImovel')}}
                                        </div>
@endif                                        
                                        <label for="descricaoImovel"> Descrição Imóvel: </label>
                                        <textarea class="form-control" name="descricaoImovel" id="descricaoImovel" rows="3"> </textarea>
                                        <label for="nbanheiroImovel"> Banheiros no Imóvel: </label>
                                        <br>
                                        <select  class="form-control" name="nbanheiroImovel" id="nbanheiroImovel">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <br>
                                        <label for="nquartoImovel"> Quartos no Imóvel: </label>
                                        <br>
                                        <select  class="form-control" name="nquartoImovel" id="nquartoImovel">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <br>
                                        <label for="ngaragem"> Vagas de Garagem no Imóvel: </label>
                                        <br>
                                        <select class="form-control" name="ngaragem" id="ngaragem">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <br>
                                    
                                    <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                            <label class="custom-file-label" for="arquivo">Envie a foto do Imóvel</label>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-sm">Salvar Moradia</button>
                                    <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                                </form>
                            </div>
                          
                        </div>
                    </div>
        </div>
        
        
    </div>
</div>
@endsection 