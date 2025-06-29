@extends('layouts.header-footer')

@section('title', 'Perfil - Sportiva')

@section('mainContent')
    <div class="container mt-5">
        <h2 class="text-center">Perfil do Usuário</h2>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Nome: {{ $user->name }}</h5>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Data de Criação: {{ $user->created_at->format('d/m/Y H:i:s') }}</p>
                <p class="card-text">Última Atualização: {{ $user->updated_at->format('d/m/Y H:i:s') }}</p>
            </div>
        </div>

        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Voltar à Página Inicial</a>
    </div>
@endsection
