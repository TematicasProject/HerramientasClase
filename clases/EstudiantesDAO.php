<?php

include_once 'Conexion.php';

class EstudiantesDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function Materias($idPrograma){
        $r = mysqli_query($this->cnn->cnnDb(), "call spMateriasPrograma(" . $idPrograma . ");");
        return $r;
    }
}

?>
