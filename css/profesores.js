function GruposPrograma(idProfesor){
    $.post("controles/profesores/Uc_VisorGrupos.php",{idProfesor:idProfesor},function(resp){
        $("#page-wrapper").html(resp);
    });
    
    
}