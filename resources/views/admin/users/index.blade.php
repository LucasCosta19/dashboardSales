@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas - Usuários')

@section('content')
<div class="container">
	<div align="center">
		<h3 class="center">Lista de Usuários</h3>

		<div class="row">
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>E-mail</th>						
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>							
							<td>
								<a href="{{ route('admin.users.edit', $user->id) }}" class="btn grey darken-3"><i class="material-icons left">edit</i>Editar</a>&nbsp;&nbsp;
								<a href="{{ route('admin.users.delete', $user->id) }}" onClick="return confirm('Deseja Deletar esse Usuário??');" class="btn red"><i class="material-icons left">delete</i>Deletar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row" id="nav-pagination" align="center" style="font-size: 18px!important;">
			{{ $users->links() }}
		</div>

		<div class="row">
			<a class="btn blue" href="{{ route('admin.users.new') }}"><i class="material-icons left">add</i>Adicionar</a>
		</div>
	</div>
</div>
@endsection