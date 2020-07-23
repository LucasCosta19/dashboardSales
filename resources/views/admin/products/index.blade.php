@extends('admin/layout.site')

@section('title', 'Dashboard de Vendas - Produtos')

@section('content')
<div class="container">
	<div align="center">
		<h3 class="center">Lista de Produtos</h3>

		<div class="row">
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Valor</th>						
						<th>Estoque</th>
						<th>Imagem</th>
						<th>Ativo</th>
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->value }}</td>
							<td>{{ $product->stock }}</td>
							<td><img width="60" height="60" src="{{ asset($product->image) }}" alt="{{ $product->name }}"></td>
							<td>{{ $product->active }}</td>
							<td>
								<a href="{{ route('admin.products.edit', $product->id) }}" class="btn grey darken-3"><i class="material-icons left">edit</i>Editar</a>&nbsp;&nbsp;
								<a href="{{ route('admin.products.delete', $product->id) }}" onClick="return confirm('Deseja Deletar esse Produto??');" class="btn red"><i class="material-icons left">delete</i>Deletar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row" id="nav-pagination" align="center" style="font-size: 18px!important;">
			{{ $products->links() }}
		</div>

		<div class="row">
			<a class="btn blue" href="{{ route('admin.products.new') }}"><i class="material-icons left">add</i>Adicionar</a>
		</div>
	</div>
</div>
@endsection