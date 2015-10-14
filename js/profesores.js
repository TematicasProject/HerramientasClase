function GruposPrograma(idProfesor){
    $.post("controles/profesores/Uc_VisorGrupos.php",{idProfesor:idProfesor},function(resp){
        $("#page-wrapper").html(resp);
    });
}
function adminTematicas_Detalle(){
    $.post("controles/administradores/Uc_adminTematicas_Detalle.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarTematicas_Detalle(){
    var codTematicas = $("#txtTematicas").val();
    var codDetalle = $("#txtDetalle").val();
    var NombreArchivo =$("#txtNombreArchivo").val();
    var Extencion = $("#txtExtencion").val();
    var Comentario = $("#txtComentario").val();
    var RutaFisica = $("#txtRutaFisica").val();
    var RutaVirtual = $("#txtRutaVirtual").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarTematicas_Detalle",
        codTematicas:codTematicas,
        codDetalle:codDetalle,
        NombreArchivo:NombreArchivo,
        Extencion:Extencion,
        Comentario:Comentario,
        RutaFisica:RutaFisica,
        RutaVirtual:RutaVirtual,
        CodRegistro:CodRegistro
    }, function(resp){
        alert(resp);
    });
}