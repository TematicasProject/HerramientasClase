
<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Matricula</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Matricula:</label>
                    <input id="txtMatricula" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Estudiante:</label>
                    <input id="txtEstudiante" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Cod Programa :</label>
                    <input id="txtPrograma" maxlength="60" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Jornada:</label>
                    <input id="txtJornada" maxlength="20" type="text" class="form-control">
                </div>
            </div>
             <div class="col-lg-4">
                <div class="form-group">
                    <label>Fecha:</label>
                    <input id="txtfecha" maxlength="20" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroMatricula();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarRegistroMatricula();'>Guardar</button>
    </div>
</div>

