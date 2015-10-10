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
    
    function GuardarPensum($codPrograma, $codMateria){
      return "ok";  
    }
    
    function GuardarEscuelas($codEscuela, $Nombre){
      return "ok";  
    }
    
    function GuardarJornada($codJornada, $Nombre){
      return "ok";  
    }
    
    function GuardarMateria($codMateria, $Nombre){
      return "ok";  
    }
    
    function GuardarTematica($codTematica, $codGrupo, $Nombre, $codMateria){
      return "ok";  
    }
    
    function GuardarPerfiles($codPerfil, $Nombre){
      return "ok";  
    }
    
    function GuardarMatricula($codMatricula, $codEstudiante, $codPrograma, $codJornada, $Fecha){
      return "ok";  
    }
    
    function GuardarGrupo($codGrupo, $Nombre, $codJornada, $codProfesor, $codMateria){
      return "ok";  
    }
    
    function GuardarProgramas($codProgramas, $Nombre, $codEscuelas){
      return "ok";  
    }
    
    function GuardarGrupos_Estudiantes($codGrupos, $codEstudiantes){
      return "ok";  
    }
    
    function GuardarTematicas_Detalle($codDetalle, $codTematica, $NombreArchivo, $Extencion, $Comentario, $RutaFisica, $RutaVirtual){
      return "ok";  
    }
    
}
?>