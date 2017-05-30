<form role="form">
    <div class="form-group">
        <label>Tipo Documento</label>
        <select class="form-control" id="type_document_id" name="type_document_id">
            <option value="">--Seleccione--</option>
            {foreach from=$tipdoc item=tdoc}
            <option value="{$tdoc.type_id}">{$tdoc.descrip}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label>Documento</label>
        <input class="form-control" id="document" name="document">
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" id="firts_name" name="firts_name">
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input class="form-control" id="last_name" name="last_name">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" id="gender" name="gender">
            <option value="">--Seleccione--</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label>Fecha Nacimineto</label>
        <input class="form-control" id="date_birth" name="date_birth">
    </div>
    <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control" id="code_city" name="code_city">
            <option value="">--Seleccione--</option>
            {foreach from=$listciu item=ciu}
            <option value="{$ciu.city_id}">{$ciu.city_name}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input class="form-control" id="street" name="street">
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label>Nit</label>
        <input class="form-control" id="company_code" name="company_code">
    </div>
    <div class="form-group">
        <label>Nombre Empresa</label>
        <input class="form-control" id="company_name" name="company_name">
    </div>
    <button type="button" class="btn btn-success" id="savclien">Crear</button>
    <button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
</form>