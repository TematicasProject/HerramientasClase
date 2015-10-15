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

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" />

        <title>Login</title>
    </head>
    <body>
        <div class="container">

            <div class="row" id="pwd-container">
                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <section class="login-form">
                        <form method="post" action="index.php" class="sombras" role="login">
                           
                            <img src="img/img-login.png" class="img-responsive" alt="censa"/>

                            <input type="text" name="Usuario" class="form-control input-lg" placeholder="Usuario"/>


                            <input type="password" name="Clave" class="form-control input-lg" placeholder="Contraseña"/>	


                            <input name="iniciar" type="submit" class="btn btn-lg btn-censa btn-block" value="Iniciar Sesión"/>

                            <div style="color:red;">
                                <asp:Label ID="lblError" runat="server"></asp:Label>
                            </div>
                        </form>
                    </section>
                </div>

                <div class="col-md-4"></div>


            </div>

            <p>
                <br>
                <br>
            </p>
        </div>
        <a href="registro.php"><h2 align="center">Registrarse</h2></a><br><br>
    </body>
</html>
