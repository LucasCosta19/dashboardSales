@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas - Novo Usuário')

@section('content')
	<div class="container">
		<h3 class="center">Adicionar Usuário</h3>
		<div class="row">
			<form action="{{ route('admin.users.save') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@include('admin.users._form')

				<button class="btn teal darken-4">Salvar</button>
			</form>
		</div>
	</div>
@endsection