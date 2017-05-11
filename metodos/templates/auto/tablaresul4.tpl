<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
  	<div class="table-responsive">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">x</th>
			<th class="success">f(x)</th>
			<th class="success">f(x)'</th>
			<th class="success">f(x)''</th>
			<th class="success">Error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].x}</td>
			<td class="success">{$response['RESULT'].fn}</td>
			<td class="success">{$response['RESULT'].fg}</td>
			<td class="success">{$response['RESULT'].fh}</td>
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
			<th class="warning">n</th>
			<th class="warning">x</th>
			<th class="warning">f(x)</th>
			<th class="warning">f(x)'</th>
			<th class="warning">f(x)''</th>
			<th class="warning">Error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.x}</td>
			<td class="warning">{$item.fn}</td>
			<td class="warning">{$item.fg}</td>
			<td class="warning">{$item.fh}</td>
			<td class="warning">{$item.error}</td>
		</tr>
		{/foreach}
	</table>
	</div>
</div>