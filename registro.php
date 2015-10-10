<?php
//session_start();
include_once 'clases/UsuariosDAO.php';
$_mensaje = "";
$cnn = new Conexion();
?>
<html>
    <head>
        <title>
            Registrarse
        </title>
    </head>
    <body>
        <form action="" method="post" class="registro">
            <div>
                <label>
                    Usuario:
                </label>
                <input type="text" name="usuario" size="20">
            </div><br>
             <div>
                <label>
                    Programa:
                </label>
                <input type="text" name="programa" size="20">
            </div><br>
            <div>
                <label>
                    Clave:
                </label>
                <input type="password" name="password" size="20">
            </div><br>
            <div>
                <label>
                    Repetir Clave:
                </label>
                <input type="password" name="repassword" size="20">
            </div><br>
            <div>
                <input type="submit" name="enviar" value="Registrar">
            </div><br>
        </form>
        <?php
        if(isset($_POST["enviar"])){
            if($_POST["usuario"] == "" or $_POST["password"] == "" or $_POST["repassword"] == ""){ 
                echo "Por favor llene todos los campos.";
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
                            mysqli_query($cnn->cnnDb(),$sql) or die ("Error al guardar el registro"); 
  
                            echo "Usted se ha registrado correctamente."; 
                        } else{             
                            echo "Las claves no son iguales, intente nuevamente."; 
                        } 
                    } else{
                        echo "Este usuario ya ha sido registrado anteriormente."; 
                    } 
                } 
            }
        }
        ?>
    </body>
</html>


