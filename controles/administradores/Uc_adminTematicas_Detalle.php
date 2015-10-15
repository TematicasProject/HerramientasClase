
<?php

?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Administracion de Tematicas_Detalle</strong></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Detalle:</label>
                    <input id="txtDetalle" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Cod Tematica:</label>
                    <input id="txtTematica" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label>NombreArchivo:</label>
                    <input id="txtNombreArchivo" maxlength="60" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Extencion:</label>
                    <input id="txtExtencion" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Comentario:</label>
                    <input id="txtComentario" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>RutaFisica:</label>
                    <input id="txtRutaFisica" maxlength="20" type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>RutaVirtual:</label>
                    <input id="txtRutaVirtual" maxlength="20" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="panel-footer" style='text-align: right;'>
        <button class="btn btn-primary" onclick='NuevoRegistroTematicas_Detalle();'>Nuevo</button>
        <button class="btn btn-success" onclick='GuardarRegistroTematicas_Detalle();'>Guardar</button>
    </div>
</div>
