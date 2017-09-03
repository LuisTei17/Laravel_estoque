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
        @foreach ($produtos as $produto) 
        <tr class="{{ $produto->quantidade <= 1 ? 'danger' : ''}} ">
            <td> {{ $produto->nome }}</td>
            <td> R$ {{ $produto->valor }}</td>
            <td> {{ $produto->descricao }}</td>
            <td> {{ $produto->quantidade }}</td>
            <td>
                <a href="/produtos/mostra/<?= $produto->id?>">Visualizar</a>
            </td>
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

<h4>
    <span class="label label-danger pull-right">Um ou menos itens no estoque</span>
</h4>
@stop