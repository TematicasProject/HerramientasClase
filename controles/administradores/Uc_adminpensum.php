<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion del pensum</strong></div>
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
                    <label>cod Materia:</label>
                    <input id="txtMateria" maxlength="60" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroPensum();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardaregistroPensum();'>Guardar</button>
    </div>
</div>

