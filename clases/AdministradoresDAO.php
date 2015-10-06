<?php

include_once 'Conexion.php';

class AdministradoresDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    function GuardarUsuario($codUsuario, $clave, $nombre, $codPerfil){
        return "ok";
    }
}
