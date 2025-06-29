<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Exibe a página de compra do produto.
     */
    public function formFazerPedido($id){
        $produto = Produto::findOrFail($id);
    }

    /**
     * Processa a compra do produto.
     */
    public function finalizarCompra()
    {
        return redirect('/')->with('success', 'Pedido realizado com sucesso!');
    }
}
