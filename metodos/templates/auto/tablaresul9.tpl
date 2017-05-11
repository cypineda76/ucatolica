{literal}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./scripts/highcharts.js" charset="UTF-8"></script>
{/literal}
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="success" align="center">i</th>
			<th class="success" align="center">x_i</th>
			<th class="success" align="center">y_i</th>
			{if $rk > 1}
			<th class="success" align="center">k_1</th>
			{/if}
			{if $rk >= 2}
			<th class="success" align="center">k_2</th>
			{/if}
			{if $rk >= 3}
			<th class="success" align="center">k_3</th>
			{/if}
			{if $rk >= 4}
			<th class="success" align="center">k_4</th>
			{/if}
			<th class="success" align="center">k</th>
		</tr>
		{foreach from=$response item=item key=llave}
		<tr>
			<td class="warning">{$item.i}</td>
			<td class="warning">{$item.x}</td>
			<td class="warning">{$item.y}</td>
			{if $rk > 1}
			<td class="warning">{$item.k1}</td>
			{/if}
			{if $rk >= 2}
			<td class="warning">{$item.k2}</td>
			{/if}
			{if $rk >= 3}
			<td class="warning">{$item.k3}</td>
			{/if}
			{if $rk >= 4}
			<td class="warning">{$item.k4}</td>
			{/if}
			<td class="warning">{$item.k}</td>
		</tr>
		{/foreach}
	</table>
</div>
<div class="row">
	<div class="col-sm-8 col-md-8" id="grafica"><script type="text/javascript">{$graf}</script></div>
</div>