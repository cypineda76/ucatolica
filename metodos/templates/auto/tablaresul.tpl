<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion para <img src="{$imagen}"></div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a_n</th>
			<th class="success">s_n</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].a_n}</td>
			<td class="success">{$response['RESULT'].s_n}</td>
			<td class="success">{$response['RESULT'].error}</td>
		</tr>
	</table>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="warning">n</th>
			<th class="warning">a_n</th>
			<th class="warning">s_n</th>
			<th class="warning">error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.a_n}</td>
			<td class="warning">{$item.s_n}</td>
			<td class="warning">{$item.error}</td>
		</tr>
		{/foreach}
	</table>
</div>