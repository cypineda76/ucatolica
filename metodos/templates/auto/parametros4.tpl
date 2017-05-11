<table width="800" height='500'>
  <tr>
    <td  valign="top">
      <div class="col-md-12">
        <h3>Parametros Globales</h3>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de X</small>
            <input type="text" name="valx" id="valx" class="form-control"">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de Y</small>
            <input type="text" name="valy" id="valy" class="form-control"">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de Z</small>
            <input type="text" name="valz" id="valz" class="form-control"">
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <div class="form-group">
              <small>Base</small>
              <input type="text" class="form-control" id="base" name="base" value="10" placeholder="Ejem. 10">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <small>Exponente</small>
              <input type="text" class="form-control" id="exponente" name="exponente" placeholder="Ejem. -3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="{$ejercicio}">
        <h3>Dimension de la matriz</h3>
        <div class="col-md-6">
          <div class="form-group">
            <small>Numero de Filas</small>
            <select id="dimfil" name="dimfil" class="form-control">
              {for $var=3 to 3}
              <option value="{$var}">{$var}</option>
              {/for}
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <small>Numero de Columnas</small>
            <select id="dimcol" name="dimcol" class="form-control">
              {for $var=4 to 4}
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