<?php

include_once 'Conexion.php';

class profesoresDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function Grupos($idprofesor){
        $r = mysqli_query($this->cnn->cnnDb(), "call spgruposPrograma(" . $idprofesor . ");");
        return $r;
    }
}

?>

