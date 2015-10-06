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
        alert(resp);
    });
}