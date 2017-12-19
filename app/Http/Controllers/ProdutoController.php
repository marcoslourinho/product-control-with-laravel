<?php namespace market\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use market\Produto;

class ProdutoController extends Controller{

  function lista(){
    $produtos = Produto::all();
    return view('listagem')->with('produtos', $produtos);
  }

  function mostra($id){
    //Request::route('id');
    $produto = Produto::find($id);
    return view('detalhes')->with('p', $produto);
  } 

  function remove($id){
    $produto = Produto::find($id);
    $produto->delete();
    return redirect('/produtos')->withInput();
  }

  function novo(){
    return view('formulario');
  }

  function adiciona(){

    Produto::create(Request::all());
    return redirect('/produtos')->withInput();

    //$params = Request::all();
    //$produto = new Produto($params);
    //$produto->save();

    //$produto->nome = Request::input('nome');
    //$produto->valor = Request::input('valor');
    //$produto->quantidade = Request::input('quantidade');
    //$produto->descricao = Request::input('descricao');

    //DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)' , array($nome, $valor, $descricao, $quantidade));

  }
}
















 ?>
