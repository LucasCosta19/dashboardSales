<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(5);

    	return view('admin.products.index', compact('products'));
    }

    public function new()
    {
    	return view('admin.products.new');
    }

    public function save(Request $req)
    {
    	$dados = $req->all();

    	if(isset($dados['active'])) {
    		$dados['active'] = 'yes';
    	} else {
    		$dados['active'] = 'not';
    	}

    	if($req->hasFile('image')) {
    		$imagem = $req->file('image');
    		$num = rand(1111,9999);
    		$dir = "img/products/";
    		$ex = $imagem->guessClientExtension();
    		$nomeImagem = "image".$num.".".$ex;
    		$imagem->move($dir, $nomeImagem);
    		$dados['image'] = $dir."/".$nomeImagem;
    	}

    	Product::create($dados);

    	return redirect()->route('admin.products')->with('mensagem', 'Produto cadastrado com sucesso!');
    }

    public function edit($id)
    {
    	$product = Product::find($id);

    	return view('admin.products.edit', compact('product'));
    }

    public function change(Request $req, $id)
    {
    	$dados = $req->all();

    	if(isset($dados['active'])) {
    		$dados['active'] = 'yes';
    	} else {
    		$dados['active'] = 'not';
    	}

    	if($req->hasFile('image')) {
    		$imagem = $req->file('image');
    		$num = rand(1111,9999);
    		$dir = "img/products/";
    		$ex = $imagem->guessClientExtension();
    		$nomeImagem = "image".$num.".".$ex;
    		$imagem->move($dir, $nomeImagem);
    		$dados['image'] = $dir."/".$nomeImagem;
    	}

    	Product::find($id)->update($dados);

    	return redirect()->route('admin.products')->with('mensagem', 'Produto alterado com sucesso!');
    }

    public function delete($id)
    {
    	Product::find($id)->delete();

    	return redirect()->route('admin.products')->with('mensagem', 'Produto deletado com sucesso!');
    }
}
