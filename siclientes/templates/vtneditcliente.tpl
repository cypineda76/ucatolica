<form role="form">
    <div class="form-group">
        <label>Tipo Documento</label>
        <select class="form-control" id="type_document_id" name="type_document_id">
            <option value="">--Seleccione--</option>
            {foreach from=$tipdoc item=tdoc}
            <option value="{$tdoc.type_id}" {if $tdoc.type_id == $rep.type_document_id}selected{/if}>{$tdoc.descrip}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label>Documento</label>
        <input class="form-control" id="document_mod" name="document_mod" value="{$rep.document}">
        <input type="hidden" id="document" name="document" value="{$rep.document}">
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" id="firts_name" name="firts_name" value="{$rep.firts_name}">
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input class="form-control" id="last_name" name="last_name" value="{$rep.last_name}">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" id="gender" name="gender">
            <option value="">--Seleccione--</option>
            <option value="M" {if $rep.gender == "M"}selected{/if}>Masculino</option>
            <option value="F" {if $rep.gender == "F"}selected{/if}>Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label>Fecha Nacimineto</label>
        <input class="form-control" id="date_birth" name="date_birth" value="{$rep.date_birth}">
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input class="form-control" id="street" name="street" value="{$rep.street}">
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input class="form-control" id="phone" name="phone" value="{$rep.phone}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" id="email" name="email" value="{$rep.email}">
    </div>
    <button type="button" class="btn btn-success" id="savedit">Editar</button>
    <button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
</form>