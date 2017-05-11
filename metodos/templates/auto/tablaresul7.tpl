<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">X</th>
			<th class="success">Y</th>
			<th class="success">Z</th>
			<th class="success">Error X</th>
			<th class="success">Error Y</th>
			<th class="success">Error Z</th>
			<th class="success">Error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].X|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].Y|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].Z|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].ERRORX|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].ERRORY|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].ERRORZ|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].error|number_format:5:",":"."}</td>
		</tr>
	</table>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="warning">n</th>
			<th class="warning">X</th>
			<th class="warning">Y</th>
			<th class="warning">Z</th>
			<th class="warning">Error X</th>
			<th class="warning">Error Y</th>
			<th class="warning">Error Z</th>
			<th class="warning">Error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.X|number_format:5:",":"."}</td>
			<td class="warning">{$item.Y|number_format:5:",":"."}</td>
			<td class="warning">{$item.Z|number_format:5:",":"."}</td>
			<td class="warning">{$item.ERRORX|number_format:5:",":"."}</td>
			<td class="warning">{$item.ERRORY|number_format:5:",":"."}</td>
			<td class="warning">{$item.ERRORZ|number_format:5:",":"."}</td>
			<td class="warning">{$item.error|number_format:5:",":"."}</td>
		</tr>
		{/foreach}
	</table>
</div>