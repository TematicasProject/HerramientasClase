<?php

include_once 'Conexion.php';

class AdministradoresDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    function GuardarUsuario($codUsuario, $clave, $nombre, $codPerfil) {
        if (mysqli_query($this->cnn->cnnDb(), "call spAdminUsuarios(1, '" . $codUsuario . "', '" . $clave . "', '" . $nombre . "', '" . $codPerfil . "')")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

