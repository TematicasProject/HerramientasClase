<?php

include_once 'clases/UsuariosDAO.php';

header('content-type: text/html; charset=utf-8');

session_start();
if (!isset($_SESSION["Usuario"])) {
    header('location:index.php');
    exit();
}
$nom_perfil = "";
switch ($_SESSION["CodPerfil"]) {
    case "01":
        $nom_perfil = "Perfil Administrador";
        break;
    case "02":
        $nom_perfil = "Perfil Docente";
        break;
    case "03":
        $nom_perfil = "Perfil Estudiante";
        break;
}

 $oUsuario = new UsuariosDAO();
 $res = $oUsuario->DatosMenu($_SESSION["Usuario"]);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Herramientas de Clase">
        <meta name="author" content="Estudiantes desarrollo Censa">
        
        <title>Herramientas Clase</title>
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/sb-admin.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.4.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/pnotify.custom.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color: #00862F;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/banner-censa.png" class="img-responsive" style="height:50px;" alt="Censa"/>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" style="background-color: #00862F;">
                <li>
                    <span class="navbar-brand" href="index.html"><?php echo $nom_perfil; ?></span>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style="color:#fff;" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["Nombre"] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color:#00862F;">
                <ul class="nav navbar-nav side-nav">
                    <?php
                    $codPerfil = $_SESSION["CodPerfil"];
                    if ($codPerfil != "01") {
                        while ($itemMenu = mysqli_fetch_array($res)) {
                            $claseIcono = "";
                            $accionMenu = "";
                            switch ($codPerfil) {
                                case "02": //Profesor
                                    $claseIcono = "fa fa-book";
                                    $accionMenu = "onclick='GruposMateria(" . $itemMenu[1] . ", \"" . $_SESSION["Usuario"] . "\");'";
                                    break;
                                case "03": //Estudiante
                                    $claseIcono = "fa fa-mortar-board";
                                    $accionMenu = "onclick='MateriasPrograma(" . $itemMenu[1] . ");'";
                                    break;
                            }

                            $formatoItemMenu = '<li>
                                                <a href="#" ' . $accionMenu . ' style="color:#fff;"><i class="' . $claseIcono . '"></i> ' . $itemMenu[2] . '</a>
                                            </li>';

                            echo $formatoItemMenu;
                        }
                    }
                    else 
                    {
                        $formatoItemMenu = '<li>
                                                <a href="#" onclick="adminProgramas();" style="color:#fff;"><i class="fa fa-clone"></i>Programas</a>
                                            </li>';
                        
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminUsuarios();" style="color:#fff;"><i class="fa fa-clone"></i>Usuarios</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminPensum();" style="color:#fff;"><i class="fa fa-clone"></i>Pensum</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminEscuelas();" style="color:#fff;"><i class="fa fa-clone"></i>Escuelas</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminJornada();" style="color:#fff;"><i class="fa fa-clone"></i>Jornada</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminMateria();" style="color:#fff;"><i class="fa fa-clone"></i>Materia</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminTematica();" style="color:#fff;"><i class="fa fa-clone"></i>Tematica</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminPerfiles();" style="color:#fff;"><i class="fa fa-clone"></i>Perfiles</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminMatricula();" style="color:#fff;"><i class="fa fa-clone"></i>Matricula</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminGrupo();" style="color:#fff;"><i class="fa fa-clone"></i>Grupo</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="adminGrupos_Estudiantes();" style="color:#fff;"><i class="fa fa-clone"></i>Grupos_Estudiantes</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="adminTematicas_Detalle();" style="color:#fff;"><i class="fa fa-clone"></i>Tematicas_Detalle</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminPensum();" style="color:#fff;"><i class="fa fa-clone"></i>Pensum</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminEscuelas();" style="color:#fff;"><i class="fa fa-clone"></i>Escuelas</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminJornada();" style="color:#fff;"><i class="fa fa-clone"></i>Jornada</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminMateria();" style="color:#fff;"><i class="fa fa-clone"></i>Materia</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminTematica();" style="color:#fff;"><i class="fa fa-clone"></i>Tematica</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminPerfiles();" style="color:#fff;"><i class="fa fa-clone"></i>Perfiles</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminMatricula();" style="color:#fff;"><i class="fa fa-clone"></i>Matricula</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="AdminGrupo();" style="color:#fff;"><i class="fa fa-clone"></i>Grupo</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="adminGrupos_Estudiantes();" style="color:#fff;"><i class="fa fa-clone"></i>Grupos_Estudiantes</a>
                                            </li>';
                        $formatoItemMenu .= '<li>
                                                <a href="#" onclick="adminTematicas_Detalle();" style="color:#fff;"><i class="fa fa-clone"></i>Tematicas_Detalle</a>
                                            </li>';
                        
                        echo $formatoItemMenu;
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/pnotify.custom.min.js" type="text/javascript"></script>
    
    <script src="js/general.js" type="text/javascript"></script>
    <script src="js/administradores.js" type="text/javascript"></script>
    <script src="js/estudiantes.js" type="text/javascript"></script>
    <script src="js/profesores.js" type="text/javascript"></script>
    

</body>
</html>
