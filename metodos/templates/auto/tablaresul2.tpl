<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
  	<div class="table-responsive">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">m</th>
			<th class="success">x</th>
			<th class="success">fx</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].a}</td>
			<td class="success">{$response['RESULT'].b}</td>
			<td class="success">{$response['RESULT'].fa}</td>
			<td class="success">{$response['RESULT'].fb}</td>
			<td class="success">{$response['RESULT'].m}</td>
			<td class="success">{$response['RESULT'].x}</td>
			<td class="success">{$response['RESULT'].fx}</td>
			<td class="success">{$response['RESULT'].error}</td>
		</tr>
	</table>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">m</th>
			<th class="success">x</th>
			<th class="success">fx</th>
			<th class="success">error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.a}</td>
			<td class="warning">{$item.b}</td>
			<td class="warning">{$item.fa}</td>
			<td class="warning">{$item.fb}</td>
			<td class="warning">{$item.m}</td>
			<td class="warning">{$item.x}</td>
			<td class="warning">{$item.fx}</td>
			<td class="warning">{$item.error}</td>
		</tr>
		{/foreach}
	</table>
	</div>
</div>