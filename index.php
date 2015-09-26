<?php
include_once 'clases/UsuariosDAO.php';
$_mensaje = "";

if(isset($_POST["iniciar"])){
    $usuario = $_POST["Usuario"];
    $clave = $_POST["Clave"];
    
    if ($usuario == "" || $clave == "") {
        $_mensaje = "Debe ingresar Usuario y Contraseña";
    }
    
    if ($_mensaje == "") {
        $oUsuario = new UsuariosDAO();
        $res = $oUsuario->ValidarUsuario($usuario);
        
        if (mysqli_num_rows($res) == 0) {
            $_mensaje = "Usuario no Existe";
        } else {
            $datosUsuario = mysqli_fetch_assoc($res);
            if ($datosUsuario["clave"] != $clave) {
                $_mensaje = "Contraseña Incorrecta";
            } else {
                session_start();
                $_SESSION["Usuario"] = $datosUsuario["codusuario"];
                $_SESSION["Nombre"] = $datosUsuario["nombre"];
                $_SESSION["CodPerfil"] = $datosUsuario["codperfil"];
                header('Location:HerramientasClase.php');
            }
        }
    }
}

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>pagina de inicio</title>
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body class="body-login">
        <br/>
        <br/>
        <img src="img/logo.jpg" alt="" class="logo"/>
        <form method="post" action="index.php">
            <div class="panel panel-default" style="width:25%; margin: auto; background-color: #EEEEEE;">
                <div class="panel-body">
                    <div style="text-align: center; padding-bottom:10px;">
                        <h2>Ingresa a tu cuenta</h2>
                    </div>
                    <table style="margin:auto">
                        <tr>

                            <td ><input type="text" name="Usuario" class="form-control" placeholder="Usuario"/></td>
                        </tr>
                        <tr>

                            <td><input type="password" name="Clave" class="form-control" placeholder="Contraseña"/></td>
                        </tr>
                        <tr>

                            <td>
                                <br/>
                                <input name="iniciar" type="submit" class="btn btn-success" style="width:100%;" value="Iniciar Sesión"/>
                            </td>
                        </tr>
                        <?php
                        if($_mensaje!="")
                        {
                        ?>
                        <tr>
                            <td style="text-align:center; padding-top:5px;">
                                <label class="ErrorLabel"><?php echo $_mensaje; ?></label>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br/>
                </div>
            </div>
        </form>
    </body>
</html>
