@extends('layout.site_home')

@section('title', 'Dashboard de Vendas - Login')

@section('content')
<div class="container">
    <div align="center">
        <div class="home-portal">
            <h3 class="center">Entrar</h3>
            <div class="row">
                <form action="{{ route('site.login.enter') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>E-mail</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Senha</label>
                    </div>

                    <button class="btn teal darken-4">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection