
<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Grupos_Estudiantes</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Grupos:</label>
                    <input id="txtGrupos" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Cod Estudiantes:</label>
                    <input id="txtEstudiantes" maxlength="60" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroGrupos_Estudiantes();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarRegistroGrupos_Estudiantes();'>Guardar</button>
    </div>
</div>
