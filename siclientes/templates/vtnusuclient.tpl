<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Usuario de cliente</div>
		<div class="panel-body">
			<form role="form">
				<div class="form-group">
					<label>Nombre</label>
					<input class="form-control" id="usunom" name="usunom">
				</div>
				<div class="form-group">
					<label>Login</label>
					<input class="form-control" id="usulog" name="usulog">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" id="usupas" name="usupas">
				</div>
				<input type="text" id="document" name="document" value="{$documentcli}">
				<button type="button" id="newuser" name="newuser" class="btn btn-success">Crear</button>
				<button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
			</form>
		</div>
	</div>
</div>