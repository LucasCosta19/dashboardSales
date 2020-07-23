<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function enter(Request $req)
    {
    	$data = $req->all();

    	if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])) {
    		return redirect()->route('admin.home');
    	}
        
    	return redirect()->route('site.login')->with("mensagem", "Usuário ou Senha não encontrados");
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('site.home');
    }
}
