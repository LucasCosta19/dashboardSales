<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::paginate(5);

    	return view('admin.users.index', compact('users'));
    }

    public function new()
    {
    	return view('admin.users.new');
    }

    public function save(Request $req)
    {
    	$dados = $req->all();   

    	$dados['password'] = bcrypt($dados['password']);	

    	User::create($dados);

    	return redirect()->route('admin.users')->with('mensagem', 'Usuário cadastrado com sucesso!');
    }

    public function edit($id)
    {
    	$user = User::find($id);

    	if($user->email == "admin@gmail.com") {
    		return redirect()->route('admin.users')->with('mensagemErro', 'Não é possivel alterar esse Usuário!');
    	}

    	return view('admin.users.edit', compact('user'));
    }

    public function change(Request $req, $id)
    {
    	$dados = $req->all();    	

    	$dados['password'] = bcrypt($dados['password']);

    	User::find($id)->update($dados);

    	return redirect()->route('admin.users')->with('mensagem', 'Usuário alterado com sucesso!');
    }

    public function delete($id)
    {
    	$users = User::find($id);

    	if($users->email == "admin@gmail.com") {
    		return redirect()->route('admin.users')->with('mensagemErro', 'Não é possivel deletar esse Usuário!');
    	}

    	User::find($id)->delete();

    	return redirect()->route('admin.users')->with('mensagem', 'Usuário deletado com sucesso!');
    }
}
