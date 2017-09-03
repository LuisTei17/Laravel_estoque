@extends('Layout/principal')
@section('conteudo')

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Novo produto</h1>
<form action="/produtos/adiciona" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" 
        value="{{ (!empty($produto)) ? $produto->nome : old('nome')}}" >
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" 
        value="{{ (!empty($produto)) ? $produto->descricao : old('descricao')}}" >
    </div>
    <div class="form-group">
        <label for="Valor">Valor</label>
        <input type="text" name="valor" id="Valor" class="form-control" placeholder="Valor" 
        value="{{ (!empty($produto)) ? $produto->valor : old('valor')}}" >
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade" 
        value="{{ (!empty($produto)) ? $produto->quantidade : old('quantidade')}}" >
    </div>
    
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
    @if(!empty($produto))
        <input type="hidden" name="customId" value="{{$produto->id}}">
    @endif
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>

</form>
@stop