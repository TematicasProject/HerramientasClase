<?php
include_once '../clases/AdministradoresDAO.php';

$action = $_POST["Action"];

switch ($action) {
    case "GuardarUsuario":
        echo GuardarUsuario();
        break;
}



function GuardarUsuario(){
    $codUsuario = $_POST["CodUsuario"];
    $nombre = $_POST["Nombre"];
    $clave = $_POST["Clave"];
    $codPerfil = $_POST["CodPerfil"];
    
    $oAdmin = new AdministradoresDAO();
    
    if ($oAdmin->GuardarUsuario($codUsuario, $clave, $nombre, $codPerfil)) {
        $resultado = array('Mensaje' => 'Usuario Guardado Correctamente');
    } else {
        $resultado = array('Error' => 'Error al Guardar el Usuario');
    }
    
    return json_encode($resultado);
}

?>