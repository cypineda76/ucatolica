<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">dx</th>
			<th class="success">x1</th>
			<th class="success">x2</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">fx1</th>
			<th class="success">fx2</th>
			<th class="success">error2</th>
			<th class="success">error1</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].a|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].b|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].dx|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].x1|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].x2|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fa|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fb|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fx1|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fx2|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].error1|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].error2|number_format:5:",":"."}</td>
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
			<th class="warning">a</th>
			<th class="warning">b</th>
			<th class="warning">dx</th>
			<th class="warning">x1</th>
			<th class="warning">x2</th>
			<th class="warning">fa</th>
			<th class="warning">fb</th>
			<th class="warning">fx1</th>
			<th class="warning">fx2</th>
			<th class="warning">error2</th>
			<th class="warning">error1</th>
			<th class="warning">error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.a|number_format:5:",":"."}</td>
			<td class="warning">{$item.b|number_format:5:",":"."}</td>
			<td class="warning">{$item.dx|number_format:5:",":"."}</td>
			<td class="warning">{$item.x1|number_format:5:",":"."}</td>
			<td class="warning">{$item.x2|number_format:5:",":"."}</td>
			<td class="warning">{$item.fa|number_format:5:",":"."}</td>
			<td class="warning">{$item.fb|number_format:5:",":"."}</td>
			<td class="warning">{$item.fx1|number_format:5:",":"."}</td>
			<td class="warning">{$item.fx2|number_format:5:",":"."}</td>
			<td class="warning">{$item.error1|number_format:5:",":"."}</td>
			<td class="warning">{$item.error2|number_format:5:",":"."}</td>
			<td class="warning">{$item.error|number_format:5:",":"."}</td>
		</tr>
		{/foreach}
	</table>
</div>