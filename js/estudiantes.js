function MateriasPrograma(idPrograma){
    $.post("controles/estudiantes/Uc_VisorMaterias.php",{idPrograma:idPrograma},function(resp){
        $("#page-wrapper").html(resp);
    });
}

