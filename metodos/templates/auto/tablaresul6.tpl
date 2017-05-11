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
			<th class="success">fa</th>
			<th class="success">fb</th>
			{foreach from=$response['TITULO'] item=tit}
			<th class="success">x_{$tit}</th>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<th class="success">fx_{$tit}</th>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<th class="success">error_{$tit}</th>
			{/foreach}
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success">{$response['RESULT'].n}</td>
			<td class="success">{$response['RESULT'].a|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].b|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].dx|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fa|number_format:5:",":"."}</td>
			<td class="success">{$response['RESULT'].fb|number_format:5:",":"."}</td>
			{foreach from=$response['TITULO'] item=tit}
			<td class="success">{$response['RESULT'].X[$tit]|number_format:5:",":"."}</td>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<td class="success">{$response['RESULT'].FX[$tit]|number_format:5:",":"."}</td>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<td class="success">{$response['RESULT'].ERROR_X[$tit]|number_format:5:",":"."}</td>
			{/foreach}
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
			<th class="warning">fa</th>
			<th class="warning">fb</th>
			{foreach from=$response['TITULO'] item=tit}
			<th class="warning">x_{$tit}</th>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<th class="warning">fx_{$tit}</th>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<th class="warning">error_{$tit}</th>
			{/foreach}
			<th class="warning">error</th>
		</tr>
		{foreach from=$response['ARR'] item=item}
		<tr>
			<td class="warning">{$item.n}</td>
			<td class="warning">{$item.a|number_format:5:",":"."}</td>
			<td class="warning">{$item.b|number_format:5:",":"."}</td>
			<td class="warning">{$item.dx|number_format:5:",":"."}</td>
			<td class="warning">{$item.fa|number_format:5:",":"."}</td>
			<td class="warning">{$item.fb|number_format:5:",":"."}</td>
			{foreach from=$response['TITULO'] item=tit}
			<td class="warning">{$item.X[$tit]|number_format:5:",":"."}</td>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<td class="warning">{$item.FX[$tit]|number_format:5:",":"."}</td>
			{/foreach}
			{foreach from=$response['TITULO'] item=tit}
			<td class="warning">{$item.ERROR_X[$tit]|number_format:5:",":"."}</td>
			{/foreach}
			<td class="warning">{$item.error|number_format:5:",":"."}</td>
		</tr>
		{/foreach}
	</table>
</div>