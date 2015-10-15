<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Grupo</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Grupo:</label>
                    <input id="txtGrupo" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input id="txtNombre" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Cod Jornada :</label>
                    <input id="txtPrograma" maxlength="60" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Profesor:</label>
                    <input id="txtJornada" maxlength="20" type="text" class="form-control">
                </div>
            </div>
             <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Materia:</label>
                    <input id="txtfecha" maxlength="20" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroGrupo();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarRegistroGrupo();'>Guardar</button>
    </div>
</div>

