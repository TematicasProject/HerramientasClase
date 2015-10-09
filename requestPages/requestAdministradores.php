<?php
include_once '../clases/AdministradoresDAO.php';

$action = $_POST["Action"];

switch ($action){
case "GuardarUsuario":
    echo GuardarUsuario();
    break;
}

function GuardarUsuario(){
    $codUsuario = $_POST["CodUsuario"];
    $nombre = $_POST["Nombre"];
    $clave = $_POST["Clave"];
    $codPerfil = $_POST["CodPerfil"];
    
    return "Datos recividos";
}

function GuardarPensum(){
    $codPrograma = $_POST["CodPrograma"];
    $codMateria= $_POST["codMateria"]; 
    
   return "Datos recividos"; 
}

function GuardarEscuelas(){
    $CodRegistro= $_POST["CodRegistro"];
    $codEscuelas = $_POST["codEscuelas"];
    $Nombre= $_POST["Nombre"]; 
     
   return "Datos recividos"; 
}

function GuardarJornada(){
    $CodRegistro= $_POST["CodRegistro"];
    $codJornada = $_POST["codJornada"];
    $Nombre= $_POST["Nombre"]; 
     
   return "Datos recividos"; 
}

function GuardarMateria(){
    $CodRegistro= $_POST["CodRegistro"];
    $codMateria = $_POST["codMateria"];
    $Nombre= $_POST["Nombre"]; 
     
   return "Datos recividos"; 
}

function GuardarTematica(){
    $codTematica= $_POST["codTematica"];
    $codGrupo = $_POST["codGrupo"];
    $Nombre= $_POST["Nombre"]; 
    $codMateria = $_POST["codMateria"];
    $CodRegistro= $_POST["CodRegistro"];
     
   return "Datos recividos"; 
}

function GuardarPerfiles(){
    $codPerfiles = $_POST["codPerfiles"];
    $Nombre= $_POST["Nombre"]; 
    $CodRegistro= $_POST["CodRegistro"];

   return "Datos recividos"; 
}

function GuardarMatricula(){
    $codMatricula= $_POST["codMatricula"];
    $codEstudiante = $_POST["codEstudiante"];
    $codPrograma= $_POST["codPrograma"]; 
    $codJornada = $_POST["codJornada"];
    $Fecha = $_POST["Fecha"];
    $CodRegistro= $_POST["CodRegistro"];
     
   return "Datos recividos"; 
}

function GuardarGrupo(){
    $codGrupo= $_POST["codGrupo"];
    $Nombre = $_POST["Nombre"];
    $codJornada= $_POST["codJornada"]; 
    $codProfesor = $_POST["codProfesor"];
    $codMateria = $_POST["codMateria"];
    $CodRegistro= $_POST["CodRegistro"];
     
   return "Datos recividos"; 
}

function GuardarPrograma(){
    $codPrograma= $_POST["codPrograma"];
    $Nombre = $_POST["Nombre"];
    $codEscuela= $_POST["codEscuela"]; 

   return "Datos recividos"; 
}
?>