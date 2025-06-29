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
            <label class="form-label">Insira uma imgaem</label>
            <input class="form-control" type="file" name="image">
            <br>
            <input class="btn btn-primary" type="submit" value = "Atualizar produto">
        </form>
    </section>
@endsection
