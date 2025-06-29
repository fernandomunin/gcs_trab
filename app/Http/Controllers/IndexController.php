<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class IndexController extends Controller
{
    public function index(){

        // Para listagem com busca
        $search = request('search');

        if($search){
            $produtos = Produto::where([['nome', 'like', '%'.$search.'%']])->get();
        }
        else{
            $produtos = Produto::all();
        }
        
        return view('index.index', ['produtos' => $produtos], ['search' => $search]);
    }
}
