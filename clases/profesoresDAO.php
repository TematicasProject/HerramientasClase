<?php

include_once 'Conexion.php';

class profesoresDAO {
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function Grupos($idProfesor, $idMateria){
        $r = mysqli_query($this->cnn->cnnDb(), "call spGruposMateria ('" . $idProfesor . "', " . $idMateria . ")");
        return $r;
    }
}

?>

