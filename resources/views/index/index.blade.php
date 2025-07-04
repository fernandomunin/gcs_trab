@extends('layouts.header-footer')

@section('title', 'Sportiva')

@section('mainContent')
    <section id="produtos-container" class=" qd-section shadow">
        <div class="col-md-12">
            @if($search)
                <h2 class="my-3">Você está procurando por {{ $search }}<h2>
            @else
                <h2 class="my-3">Todos os produtos</h2>
            @endif
                <form action="/">
                    <div class="row">
                        <div class="col">
                          <input class = "form-control" type="text" method="GET" name="search" placeholder = "Insira um nome para busca...">
                        </div>
                        <div class="col">
                          <input type="submit" class="btn btn-secondary" value = "Procurar produto">
                        </div>
                      </div>
                </form>

            @if(session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif

            <div id="card-container" class="row">
                @foreach($produtos as $produto)
                <div class="col-md-3">
                    <div class="card">
                        <img src='/img/{{ $produto->image }}' alt ="{{ $produto->nome }}">
                        <div class="card-body">
                            <p class="card-title"><a href="/produtos/exibir/{{ $produto->id }}">{{ $produto->nome }}</a></p>
                            <p class="card-text">{{ $produto->descricao }}</p>

                            @auth
                            <a class="btn btn-primary" href="/produtos/formulario_edicao/{{ $produto->id }}">Editar produto</a>

                            <form action="/produtos/{{$produto->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value = "Deletar produto">
                            </form>
                            @endauth

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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    
        
        
        

            @if(count($produtos) == 0 && $search)
                <p>Não foi possível encontrar produtos com esse nome!</p>
        
            @elseif(count($produtos) == 0)
                <p>Não temos produtos disponíveis!</p>
            @endif
        </div>
    </section>
    

@endsection
