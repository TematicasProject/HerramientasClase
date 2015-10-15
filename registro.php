<?php
include_once 'clases/UsuariosDAO.php';
$_mensaje = "";
$cnn = new Conexion();
?>
<html>
    <head>
        <title>
            Registrarse
        </title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
            </head>
    <body>
        <form action="" method="post" class="registro">
            <div align="center">
                <label>
                    Usuario:
                </label>
                <input type="text" name="usuario" size="20">
            </div><br>
            <div align="center">
                <label>
                    Nombre:
                </label>
                <input type="text" name="nombre" size="20">
            </div><br>
             <div align="center">
                <label>
                    Programa:
                </label>
                <input type="text" name="programa" size="20">
            </div><br>
            <div align="center">
                <label>
                    Clave:
                </label>
                <input type="password" name="password" size="20">
            </div><br>
            <div align="center">
                <label>
                    Repetir Clave:
                </label>
                <input type="password" name="repassword" size="20">
            </div><br>
            <div align="center">
                <input type="submit" name="enviar" value="Registrar">
            </div><br>
        </form>
        <?php
        if(isset($_POST["enviar"])){
            if($_POST["usuario"] == "" or $_POST["password"] == "" or $_POST["repassword"] == ""){?>
                <script type="text/javascript">
                alert("Por favor llene todos los campos.");
                location.href="registro.php";
                </script>
        <?php
            } else {
                { 
                    $sql = "SELECT * FROM usuarios"; 
                    $rec = mysqli_query($cnn->cnnDb(),$sql); 
                    $verificar_usuario = 0;
        
                    while($result = mysqli_fetch_object($rec)) {
                        if($result->codusuario == $_POST["usuario"]){ 
                            $verificar_usuario = 1; 
                        } 
                    }
                    
                    if($verificar_usuario == 0){
                        if($_POST["password"] == $_POST["repassword"]){
                            $usuario = $_POST["usuario"]; 
                            $password = $_POST['password']; 
                            $sql = "INSERT INTO usuarios (codusuario,clave,nombre,codperfil) VALUES ('".$usuario."','".$password."','".$usuario."','03')";
                            mysqli_query($cnn->cnnDb(),$sql) or die ("Error al guardar el registro");?>
                            <script type="text/javascript">
                            alert("Usted se ha registrado correctamente.");
                            location.href="index.php";
                            </script>
                        <?php
                        } else{?>             
                            <script type="text/javascript">
                            alert("Las claves no son iguales, intente nuevamente.");
                            location.href="registro.php";
                            </script>
                            <?php
                        } 
                    } else{?>
                        <script type="text/javascript">
                        alert("Este usuario ya ha sido registrado anteriormente.");
                        location.href="registro.php";
                        </script>
                        <?php
                        } 
                    }
                }
            }
        ?>
    </body>
</html>


