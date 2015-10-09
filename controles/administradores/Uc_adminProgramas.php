<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion del Programas</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Programa:</label>
                    <input id="txtPrograma" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input id="txtNombre" maxlength="60" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Cod Escuela:</label>
                    <input id="txtEscuela" maxlength="60" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroProgramas();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardaregistroProgramas();'>Guardar</button>
    </div>
</div>

