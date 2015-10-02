<?php

include_once 'Conexion.php';

class UsuariosDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function ValidarUsuario($usuario){
        $r = mysqli_query($this->cnn->cnnDb(), "select codusuario, clave, nombre, codperfil from usuarios where codusuario = '" . $usuario . "'");
        return $r;
    }
    
    public function DatosMenu($usuario){
        $r = mysqli_query($this->cnn->cnnDb(), "call spOpcionesMenu('" . $usuario . "');");
        return $r;
    }
}
?>