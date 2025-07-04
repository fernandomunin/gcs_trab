@extends('layouts.header-footer')

@section('title', 'Sportiva')

@section('mainContent')
    <section class="qd-section shadow">
        @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        <h2>Adicione um produto</h2>
        <form action="/produtos" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="form-label">Nome do produto</label>
            <input class="form-control" type="text" name="nome" placeholder="Insira o nome do produto aqui...">
            <br>
            <label class="form-label">Descrição do produto</label>
            <textarea class="form-control" name="descricao" placeholder="Insira a descricao do produto aqui..."></textarea>
            <br>
            <label class="form-label">Preço</label>
            <input class="form-control" type="number" step="0.01" name="preco" placeholder="R$ 0.00">
            <br>
            <label class="form-label">Quantidade</label>
            <input class="form-control" type="number" name="qtd" placeholder="Ex.: 10">
            <br>
            <label class="form-label">Categoria</label>
            <input class="form-control" type="text" name="categoria" placeholder="Ex.: Camisetas, Calças, etc.">
            <br>
            <label class="form-label">Insira uma imagem</label>
            <input class="form-control" type="file" name="image">
            <br>
            <input class="btn btn-primary" type="submit" value = "Criar produto">
        </form>

    </section> 
@endsection
