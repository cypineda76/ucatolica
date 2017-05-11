<div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Integracion Numerica</div>
  <div class="panel-body">
  	<p>a: {$response['TIT'].a}</p>
  	<p>b: {$response['TIT'].b}</p>
  	<p>n: {$response['TIT'].n}</p>
  	<p>h: {$response['TIT'].h}</p>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th rowspan="2" class="success" align="center">i</th>
			<th rowspan="2" class="success" align="center">x_i</th>
			<th rowspan="2" class="success" align="center">y_i</th>
			<th colspan="3" class="success" align="center">Regla</th>
		</tr>
		<tr>
	      <td class="success">Trapecio</td>
	      <td class="success">Simpson</td>
	      <td class="success">Boole</td>
	    </tr>
		{foreach from=$response['ARR'] item=item key=llave}
		<tr>
			<td class="warning">{$item.it}</td>
			<td class="warning">{$item.xi}</td>
			<td class="warning">{$item.yi}</td>
			<td class="warning">{$item.trapecio}</td>
			<td class="warning">{$item.simpson}</td>
			<td class="warning">{$item.boole}</td>
		</tr>
		{/foreach}
		<tr>
			<th class="success" colspan="3">Suma</th>
			<th class="success">{$response['TOT'].trapecio}</th>
			<th class="success">{$response['TOT'].simpson}</th>
			<th class="success">{$response['TOT'].boole}</th>
		</tr>
	</table>
</div>