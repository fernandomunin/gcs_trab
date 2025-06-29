<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Exibe o perfil do usuário logado.
     */
    public function perfil()
    {
        // Verifica se o usuário está logado
        if (!Auth::check()) {
            return redirect('/login')->withErrors('Você precisa estar logado para acessar esta página.');
        }

        // Obtém o usuário logado
        $user = Auth::user();

        // Retorna a view com os dados do usuário
        return view('user.perfil', compact('user'));
    }
}
