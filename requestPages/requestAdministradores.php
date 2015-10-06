<?php
include_once '../clases/AdministradoresDAO.php';

$action = $_POST["Action"];

switch ($action){
case "GuardarUsuario":
    echo GuardarUsuario();
    break;
}

function GuardarUsuario(){
    $codUsuario = $_POST["CodUsuario"];
    $nombre = $_POST["Nombre"];
    $clave = $_POST["Clave"];
    $codPerfil = $_POST["CodPerfil"];
    
    return "Datos recividos";
}

?>