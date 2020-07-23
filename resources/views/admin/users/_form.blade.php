<div class="input-field">
	<input type="text" name="name" required="" value="{{ isset($user->name) ? $user->name : '' }}">
	<label>Nome</label>
</div>

<div class="input-field">
	<input type="email" name="email" required="" value="{{ isset($user->email) ? $user->email : '' }}">
	<label>E-mail</label>
</div>

<div class="input-field">
	<input type="password" name="password" required="" value="{{ isset($user->password) ? $user->password : '' }}">
	<label>Senha</label>
</div>