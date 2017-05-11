{literal}
	<style type="text/css">
		.inputcel{
			text-align: center;
		    width: 40px;
		    font-size: 13px;
		}
		.gridtable {
			font-family: verdana,arial,sans-serif;
			font-size:11px;
			color:#333333;
			border-width: 1px;
			border-color: #666666;
			border-collapse: collapse;
		}
		.gridtable th {
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #dedede;
			text-align: center;
		}
		.gridtable td {
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #ffffff;
		}
	</style>
{/literal}
<form id="formMatriz">
<input type="hidden" name="x" id="x" value="">
<table border="1" align="center" class="gridtable">
	<tr>
		<th>N&ordm;</th>
	{foreach $matriz['TITCOL'] item=columna key=kc}
		<th>x_{$kc}</th>
	{/foreach}
		<th>b</th>
	</tr>
	{foreach $matriz['FIL'] item=fila key=kf}
	<tr>
	<th>{$kf}</th>
	{foreach $matriz['COL'] item=columna key=kc}
		<td><input type="text" class="inputcel" size="4" name="M[{$kf}][{$kc}]" id="M[{$kf}][{$kc}]" value="{$matriz['LLE'][$kf][$kc]}"></td>
	{/foreach}
	</tr>
	{/foreach}
</table>
</form>