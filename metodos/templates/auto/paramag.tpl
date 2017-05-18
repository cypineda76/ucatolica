<table width="1300" height='500'>
  <tr>
    <td  valign="top">
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="{$ejercicio}">
        <h1>Algoritmo Genetico</h1>
        <div class="col-md-12">
        <div class="form-group">
          <small>Cantidad de Ciudades</small>
          <select id="dimfil" name="dimfil" class="form-control">
            {for $var=7 to 56}
            <option value="{$var}">{$var}</option>
            {/for}
          </select>
        </div>
        </div>
        <hr>
        <div id="divmatriz"></div>
        <button type="button" class="btn btn-default" id="btnmatriz" name="btnmatriz" onclick="llenarmatrizag();">llenar matriz(Numeros aleatorios)</button>
        <hr>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Poblacion</small>
          <input type="text" name="population" id="population" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Generaciones</small>
          <input type="text" name="generations" id="generations" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Elitismo</small>
          <input type="text" name="elitism" id="elitism" class="form-control">
          </div>
        </div>
        <hr>
        <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
      </form>
    </div>
    </td>
  </tr>
</table>