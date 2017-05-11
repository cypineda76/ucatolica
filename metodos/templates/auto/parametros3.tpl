<table width="800" height='500'>
  <tr>
    <td  valign="top">
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="{$ejercicio}">
        <h1>Dimension de la matriz</h1>
        <div class="col-md-6">
        <div class="form-group">
          <small>Numero de Filas</small>
          <select id="dimfil" name="dimfil" class="form-control">
            {for $var=2 to 10}
            <option value="{$var}">{$var}</option>
            {/for}
          </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <small>Numero de Columnas</small>
          <select id="dimcol" name="dimcol" class="form-control">
            {for $var=3 to 10}
            <option value="{$var}">{$var}</option>
            {/for}
          </select>
        </div>
        </div>
        <hr>
        <div id="divmatriz"></div>
        <button type="button" class="btn btn-default" id="btnmatriz" name="btnmatriz" onclick="llenarmatriz();">llenar matriz(Numeros aleatorios)</button>
        <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
      </form>
    </div>
    </td>
  </tr>
</table>