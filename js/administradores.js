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

function AdminEscuelas(){
    $.post("controles/administradores/Uc_AdminEscuelas.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarEscuelas(){
    var codEscuelas = $("#txtEscuelas").val();
    var Nombre =$("#txtNombre").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarEscuelas",
        CodRegistro:CodRegistro,
        codEscuelas:codEscuelas,
        Nombre:Nombre
    }, function(resp){
        alert(resp);
    });
}

function AdminGrupo(){
    $.post("controles/administradores/Uc_AdminGrupo.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarGrupo(){
    var codGrupo = $("#txtGrupo").val();
    var Nombre = $("#txtNombre").val();
    var codJornada =$("#txtJornada").val();
    var codProfesor = $("#txtProfesor").val();
    var codMateria = $("#txtMateria").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarGrupo",
        codGrupo:codGrupo,
        Nombre:Nombre,
        codJornada:codJornada,
        codProfesor:codProfesor,
        codMateria:codMateria,
        CodRegistro:CodRegistro
    }, function(resp){
        alert(resp);
    });
}

function AdminMateria(){
    $.post("controles/administradores/Uc_AdminMateria.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarMateria(){
    var codMateria = $("#txtMateria").val();
    var Nombre =$("#txtNombre").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarMateria",
        CodRegistro:CodRegistro,
        codMateria:codMateria,
        Nombre:Nombre
    }, function(resp){
        alert(resp);
    });
}

function AdminJornada(){
    $.post("controles/administradores/Uc_AdminJornada.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarJornada(){
    var codJornada = $("#txtcodJornada").val();
    var Nombre =$("#txtNombre").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarJornada",
        CodRegistro:CodRegistro,
        codJornada:codJornada,
        Nombre:Nombre
    }, function(resp){
        alert(resp);
    });
}

function AdminMatricula(){
    $.post("controles/administradores/Uc_AdminMatricula.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarMatricula(){
    var codMatricula = $("#txtMatricula").val();
    var codEstudiante = $("#txtEstudiante").val();
    var codPrograma =$("#txtPrograma").val();
    var codJornada = $("#txtJornada").val();
    var Fecha = $("#txtFecha").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarMatricula",
        codMatricula:codMatricula,
        codEstudiante:codEstudiante,
        codPrograma:codPrograma,
        codJornada:codJornada,
        Fecha:Fecha,
        CodRegistro:CodRegistro
    }, function(resp){
        alert(resp);
    });
}
function AdminPerfiles(){
    $.post("controles/administradores/Uc_AdminPerfiles.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarPerfiles(){
    var codPerfiles = $("#txtPerfiles").val();
    var Nombre =$("#txtNombre").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarPerfiles",
        codPerfiles:codPerfiles,
        Nombre:Nombre,
        CodRegistro:CodRegistro  
    }, function(resp){
        alert(resp);
    });
}

function AdminTematica(){
    $.post("controles/administradores/Uc_AdminTematica.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarTematica(){
    var codTematica = $("#txtTematica").val();
    var codGrupo = $("#txtGrupo").val();
    var Nombre =$("#txtNombre").val();
    var codMateria = $("#txtMateria").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarTematica",
        codTematica:codTematica,
        codGrupo:codGrupo,
        Nombre:Nombre,
        codMateria:codMateria,
        CodRegistro:CodRegistro
    }, function(resp){
        alert(resp);
    });
}

function AdminPensum(){
    $.post("controles/administradores/Uc_Adminpensum.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarPensum(){
    var codPrograma = $("#txtprograma").val();
    var codMateria =$("#txtMateria").val();
    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarPensum",
        CodRegistro:CodRegistro,
        codPrograma:codPrograma,
        codMateria:codMateria
    }, function(resp){
        alert(resp);
    });
}

function adminProgramas(){
    $.post("controles/administradores/Uc_adminProgramas.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarProgramas(){
    var codProgramas = $("#txtProgramas").val();
    var Nombre =$("#txtNombre").val();
    var codEscuela = $("#txtEscuela").val();
     var  CodRegistro = $("#txtRegistro").val();
    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarProgramas",
        CodRegistro:CodRegistro,
        codProgramas:codProgramas,
        Nombre:Nombre,
        codEscuela:codEscuela
    }, function(resp){
        alert(resp);
    });
}

function adminGrupos_Estudiantes(){
    $.post("controles/administradores/Uc_adminGrupos_Estudiantes.php",function(resp){
        $("#page-wrapper").html(resp);
    });
}

function GuardarGrupos_Estudiantes(){
    var codGrupos = $("#txtGrupo").val();
    var codEstudiantes =$("#txtEstudiantes").val();
    var CodRegistro =$("#txtRegistro").val();

    
    $.post("requestPages/requestAdministradores.php", {
        Action: "GuardarGrupo_Estudiantes",
        CodRegistro:CodRegistro,
        codGrupos:codGrupos,
        codEstudiantes:codEstudiantes
    }, function(resp){
        alert(resp);
    });
}

function AdminTematica(){
    $.post("controles/administradores/Uc_AdminTematica.php",function(resp){
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
