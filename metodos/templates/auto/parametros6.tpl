<form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="{$ejercicio}">
  <h1>Parametros</h1>
  <div class="form-group">
    <label for="ejemplo_email_1">h</label>
    <input type="text" class="form-control" id="parh" name="para">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">x</label>
    <input type="text" class="form-control" id="parx" name="parb">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">y</label>
    <input type="text" class="form-control" id="pary" name="parn">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Seleccionar el tipo de Rungge-Kutta</label>
    <select id="parrk" name="parrk" class="form-control">
      <option value=''>--Seleccionar--</option>
      <option value='1'>Rungge-Kutta 1</option>
      <option value='2'>Rungge-Kutta 2</option>
      <option value='3'>Rungge-Kutta 3</option>
      <option value='4'>Rungge-Kutta 4</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">n</label>
    <input type="text" class="form-control" id="parn" name="parn">
  </div>
  <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
</form>