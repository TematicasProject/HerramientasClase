<?php
class Conexion {
    protected $cnn;
    
    function cnnDb(){
        $this->cnn = new mysqli("localhost:3306", "root", "", "tematicasprojectdb") or die ("Error Conexion");
        return $this->cnn;
    }
}
?>