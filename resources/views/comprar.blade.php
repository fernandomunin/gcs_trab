@extends('layouts.header-footer')

@section('title', 'Comprar Produto')

@section('mainContent')
    <section class = "qd-section shadow">
        <h2>Comprar Produto</h2>
            <form action="{{ route('finalizar-compra') }}" method="POST">
                @csrf
                @method('PUT')
                <label for="produto_nome" class="form-label">Produto</label>
                <input type="text" class="form-control" id="produto_nome" name="produto_nome" value="{{ $nome }}" readonly>

                <button type="submit" class="btn btn-success">Finalizar Compra</button>
            </form>
        </div>

    </section>
    
@endsection
