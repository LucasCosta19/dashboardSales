@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas - Novo Produto')

@section('content')
	<div class="container">
		<h3 class="center">Adicionar Produto</h3>
		<div class="row">
			<form action="{{ route('admin.products.save') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@include('admin.products._form')

				<button class="btn teal darken-4">Salvar</button>
			</form>
		</div>
	</div>
@endsection