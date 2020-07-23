@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas - Alterar Produto')

@section('content')
	<div class="container">
		<h3 class="center">Editar Produto</h3>
		<div class="row">
			<form action="{{ route('admin.products.change', $product->id) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="put">
				@include('admin.products._form')

				<button class="btn deep-orange"><i class="material-icons left">edit</i>Atualizar</button>
			</form>
		</div>
	</div>
@endsection