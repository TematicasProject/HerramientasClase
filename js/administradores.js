function AdminUsuarios(){
    $.post("controles/administradores/Uc_AdminUsuarios.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarUsuario(){
    var codUsuario = $("#txtUsuario").val();
    var nombre =$("#txtNombre").val();
    var clave = $("#txtClave").val();
    var codPerfil = $("#cmbPerfil").val();
    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarUsuario",
        CodUsuario: codUsuario,
        Nombre:nombre,
        Clave:clave,
        CodPerfil:codPerfil
    }, function(resp){
        resp = JSON.parse(resp);
        if(resp.Error != undefined){
            Notificacion("error", "Error", resp.Error);
        }
        else{
            Notificacion("success", "Usurio Guardado", resp.Mensaje);
            ClearFormAdminUsuarios();
        }
    });
}

function ClearFormAdminUsuarios()
{
    $("#txtUsuario").val("");
    $("#txtNombre").val("");
    $("#txtClave").val("");
    $("#cmbPerfil").prop("selectedIndex", 0);
}