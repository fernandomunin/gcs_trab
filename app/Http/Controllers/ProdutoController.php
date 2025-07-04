<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function formAdicionarProduto(){
        return view('produtos.formulario-adicionar-produto');
    }

    public function adicionarProduto(Request $request){
        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->qtd = $request->quantidade;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;
            $requestImage->move(public_path('img'), $imageName);

            $produto->image = $imageName;
        }

        $produto->save();

        return redirect('/produtos/adicionar')->with('success', 'Produto adicionado com sucesso!');
    }

    public function exibirProduto($id){
            $produto = Produto::findOrFail($id);

            return view('produtos.exibir-produto', ['produto' => $produto]);
    }

    public function deletarProduto($id){
        Produto::findOrFail($id)->delete();

        return redirect('/')->with('success', 'Produto deletado com sucesso');
    }

    public function formEditarProduto($id){
        $produto = Produto::findOrFail($id);

        return view('produtos.formulario-editar-produto', ['produto' => $produto]);
    }

    public function editarProduto(Request $request){
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;
            $requestImage->move(public_path('img'), $imageName);

            $data['image'] = $imageName;
        }

        Produto::findOrFail($request->id)->update($data);

        return redirect('/')->with('success', 'Produto alterado com sucesso!');
    }
}
