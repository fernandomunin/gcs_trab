@extends('layouts.header-footer')

@section('title', 'Sportiva')

@section('mainContent')
    <section class = "qd-section shadow">
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <h2>Editar produto {{$produto->nome}}</h2>
        <form action="/produtos/editar/{{$produto->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="form-label">Nome do produto</label>
            <input class="form-control" type="text" name="nome" placeholder="Insira o nome do produto aqui..." value="{{ $produto->nome }}">
            <br>
            <label class="form-label">Descrição do produto</label>
            <textarea class="form-control" name="descricao" placeholder="Insira a descricao do produto aqui...">{{ $produto->descricao }}</textarea>
            <br>
            <label class="form-label">Preço</label>
            <input class="form-control" type="number" step="0.01" name="preco" placeholder="R$ 0.00" value="{{ $produto->preco }}">
            <br>
            <label class="form-label">Quantidade</label>
            <input class="form-control" type="number" name="qtd" placeholder="Ex.: 10" value="{{ $produto->qtd }}">
            <br>
            <label class="form-label">Categoria</label>
            <input class="form-control" type="text" name="categoria" placeholder="Ex.: Camisetas, Calças, etc." value="{{ $produto->categoria }}">
            <br>
           
            <label class="form-label">Imagem atual</label><br />
            <img src='/img/{{ $produto->image }}' alt ="{{ $produto->nome }}" width="250">
            <br />
            <label class="form-label">Alterar imagem</label>
            <input class="form-control" type="file" name="image">
            <br>
            <input class="btn btn-primary" type="submit" value = "Atualizar produto">
        </form>
    </section>
@endsection
