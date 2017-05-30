<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Compras de clientes</div>
		<div class="panel-body">
			<form role="form">
				<div class="form-group">
					<label>Codigo Producto</label>
					<input class="form-control" id="producto" name="producto">
				</div>
				<div class="form-group">
					<label>Descripcion Producto</label>
					<input class="form-control" id="nombre_producto" name="nombre_producto">
				</div>
				<div class="form-group">
					<label>Cantidad</label>
					<input class="form-control" id="cantidad" name="cantidad">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input class="form-control" id="total" name="total">
				</div>
				<input type="hidden" id="document" name="document" value="{$documentcli}">
				<button type="button" id="addcompra" name="addcompra" class="btn btn-success">Añadir Compra</button>
			</form>
			<hr>
			{if $rep != 'Sin Compras'}
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tr>
						<th class="warning">Id. Producto</th>
						<th class="warning">Descripcion</th>
						<th class="warning">Cantidad</th>
						<th class="warning">Total</th>
					</tr>
					{foreach from=$rep item=item}
					<tr>
						<td class="warning">{$item.producto}</td>
						<td class="warning">{$item.nombre_producto}</td>
						<td class="warning">{$item.cantidad}</td>
						<td class="warning">{$item.total}</td>
					</tr>
					{/foreach}
				</table>
			</div>
			{/if}
		</div>
	</div>
</div>