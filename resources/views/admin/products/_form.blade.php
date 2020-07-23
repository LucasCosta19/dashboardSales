<div class="input-field">
	<input type="text" name="name" required="" value="{{ isset($product->name) ? $product->name : '' }}">
	<label>Nome</label>
</div>

<div class="input-field">
	<input type="text" name="value" required="" value="{{ isset($product->value) ? $product->value : '' }}">
	<label>Valor</label>
</div>

<div class="input-field">
	<input type="text" name="stock" required="" value="{{ isset($product->stock) ? $product->stock : '' }}">
	<label>Estoque</label>
</div>

<div class="file-field input-field">
	<div class="btn blue">
		<span>Imagem</span>
		<input type="file" name="image" required="">
	</div>
	<div class="file-path-wrapper">
    	<input class="file-path validate" type="text">
  	</div>
</div>
@if(isset($product->image))
<div class="input-field">
	<img width="150" src="{{ asset($product->image) }}" alt="">
</div>
@endif

<div class="input-field">
	<p>
      <label>
        <input type="checkbox" name="active" {{ isset($product->active) && $product->active == 'yes' ? 'checked' : '' }} value="true" />
        <span>Ativo?</span>
      </label>
    </p>
    <br><br>
</div>