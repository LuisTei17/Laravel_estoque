@extends('Layout/principal')
@section('conteudo')

@if(old('nome'))
<div class="alert alert-success"> <strong>Sucesso!</strong> produto {{ old('produto') }} adicionado</div>
@endif

@if(empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado</div>
@else
    <h1>Listagem de produtos</h1>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
        @foreach ($produtos as $produto) 
        <tr class="{{ $produto->quantidade <= 1 ? 'danger' : ''}} ">
            <td> {{ $produto->nome }}</td>
            <td> R$ {{ $produto->valor }}</td>
            <td> {{ $produto->descricao }}</td>
            <td> {{ $produto->quantidade }}</td>
            <td>
                <a href="{{action('ProdutoController@remove', $produto->id)}}">Deletar</a>
            </td>
            <td>
                <a href="{{action('ProdutoController@novo', $produto->id)}}">Atualizar</a>
            </td>
        <tr>
        @endForeach
    </table>
@endif
@stop