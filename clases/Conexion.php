<?php
class Conexion {
    protected $cnn;
    
    function cnnDb(){
        $this->cnn = new mysqli("sql5.freesqldatabase.com:3306", "sql590617", "mU7*sK5%", "sql590617") or die ("Error Conexion");
        return $this->cnn;
    }
}
?>