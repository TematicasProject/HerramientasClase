
<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Perfiles</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Perfiles:</label>
                    <input id="txtPerfiles" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input id="txtNombre" maxlength="60" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroPerfiles();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarRegistroPerfiles();'>Guardar</button>
    </div>
</div>

