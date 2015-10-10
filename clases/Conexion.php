<?php
class Conexion {
    protected $cnn;
    
    function cnnDb(){
        $this->cnn = new mysqli("localhost:3306", "root", "111", "tematicasprojectdb") or die ("Error Conexion");
        return $this->cnn;
    }
}
?>