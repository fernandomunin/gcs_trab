@extends('layouts.header-footer')

@section('title', $produto->nome)

@section('mainContent')
    <section class="qd-section shadow">
        <img src = '/img/{{ $produto->image }}' alt = "{{ $produto->nome }}">
        <p>{{ $produto->nome }}</p>
        <p>{{ $produto->descricao }}</p>
        <p>{{ $produto->id }}</p>
        @guest
         <form action="/finalizar-compra" method="POST">
            @csrf
            <a  href="/finalizar-compra"
                onclick="event.preventDefault();
                this.closest('form').submit();" class = "btn btn-secondary">
                Realizar pedido
            </a>
        </form>
        @endguest
        
    </section>
@endsection
