<?php
session_start();
if (!isset($_SESSION["Usuario"])) {
    header('Location:index.php');
    exit();
}
?>

<html>
    <head>
        <title>Herramientas de Clase</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.4.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="img/logo.jpg" class="logo" alt=""/>
                </div>
                <div class="col-md-8" >
                    <?php
                    switch ($_SESSION["CodPerfil"]) {
                        case "01":
                            echo '<img src="img/banner-admon.png" alt="banner" class="img-responsive"/>';
                            break;
                        case "02":
                            echo '<img src="img/banner-docentes.png" alt="banner" class="img-responsive"/>';
                            break;
                        case "03":
                            echo '<img src="img/banner-estudiantes.png" alt="banner" class="img-responsive"/>';
                            break;
                    }
                    ?>
                    
                </div>
                <div class="col-md-2">
                    informacion de sesion
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <a class="list-group-item" href="#"><i class="fa fa-home fa-fw"></i>&nbsp; Programas matriculados por los estudiantes</a>
                        <a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp; materias asignadas para los profesores</a>
                        <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp; Programas dictados en las cedes</a>
                        <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <h1>Contenido</h1>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

