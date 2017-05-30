<div class="row">
	<div class="panel panel-primary">
	<div class="panel-heading">Listado de clientes</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<th class="warning"></th>
					<th class="warning">Tipo documento</th>
					<th class="warning">Documento</th>
					<th class="warning">Nombre</th>
					<th class="warning">Apellido</th>
					<th class="warning">Genero</th>
					<th class="warning">Fecha Nacimiento</th>
					<th class="warning">Telefono</th>
					<th class="warning">Email</th>
					<th class="warning">Direccion</th>
					<th class="warning">Pais</th>
					<th class="warning">Departamento</th>
					<th class="warning">Ciudad</th>
					<th class="warning">Nit</th>
					<th class="warning">Nombre Compañia</th>
				</tr>
				{foreach from=$rep item=item}
				<tr>
					<td class="warning"><a href="#" onclick="compras({$item.document});"><i class="fa fa-shopping-cart "></i>
					<a href="#" onclick="editarCliente({$item.document});"><i class="fa fa-edit"></i>
					<a href="#" onclick="eliminarCliente({$item.document});"><i class="fa fa-times"></i>
					<a href="#" onclick="fnusucli({$item.document});"><i class="fa fa-user"></i>
					</td>
					<td class="warning">{$item.type_descriptions}</td>
					<td class="warning">{$item.document}</td>
					<td class="warning">{$item.firts_name}</td>
					<td class="warning">{$item.last_name}</td>
					<td class="warning">{$item.gender}</td>
					<td class="warning">{$item.date_birth}</td>
					<td class="warning">{$item.phone}</td>
					<td class="warning">{$item.email}</td>
					<td class="warning">{$item.street}</td>
					<td class="warning">{$item.country_descriptions}</td>
					<td class="warning">{$item.department_name}</td>
					<td class="warning">{$item.city_name}</td>
					<td class="warning">{$item.company_code}</td>
					<td class="warning">{$item.company_name}</td>
				</tr>
				{/foreach}
			</table>
			</div>
		</div>
	</div>
</div>