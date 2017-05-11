<form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="{$ejercicio}">
  <h1>Numero Seccion</h1>
  <div class="form-group">
    <input type="text" class="form-control" id="seccion" name="seccion">
  </div>
  <hr>
  <h1>Valor del error</h1>
  <div class="form-group">
    <label for="ejemplo_email_1">Base</label>
    <input type="text" class="form-control" id="base" name="base" placeholder="Ejem. 10">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Exponente</label>
    <input type="text" class="form-control" id="exponente" name="exponente" placeholder="Ejem. -3">
  </div>
  <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
</form>