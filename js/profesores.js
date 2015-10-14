function GruposMateria(idMateria, idProfesor){
    $.post("controles/profesores/Uc_VisorGrupos.php",{IdMateria:idMateria, IdProfesor:idProfesor},function(resp){
        $("#page-wrapper").html(resp);
    });
}