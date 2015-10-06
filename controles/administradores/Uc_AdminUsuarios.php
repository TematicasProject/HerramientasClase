<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Usuarios</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Usuario:</label>
                    <input id="txtUsuario" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Nombre de Usuario:</label>
                    <input id="txtNombre" maxlength="60" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Constraseña:</label>
                    <input id="txtClave" maxlength="20" type="password" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>Perfil de Usuario:</label>
                    <select id="cmbPerfil" class="form-control">
                        <option value="0">-- Seleccionar --</option>
                        <option value="01">ADMINISTRADOR</option>
                        <option value="02">PROFESOR</option>
                        <option value="03">ESTUDIANTE</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoUsuario();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarUsuario();'>Guardar</button>
    </div>
</div>