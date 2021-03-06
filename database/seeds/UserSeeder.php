<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
    		'name'=>'admin',
    		'email'=>'admin@gmail.com',
    		'password'=>bcrypt('123456'),
        ];
        if(User::where('email', '=', $dados['email'])->count()) {
        	$usuario = User::where('email','=',$dados['email'])->first();
        	$usuario->update($dados);
        	echo 'Alterado';
        } else {
        	User::create($dados);
        	echo 'Criado';
        }
    }
}
