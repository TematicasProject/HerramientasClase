<?php
include_once '../../clases/profesoresDAO.php';

$idProfesor = $_POST["IdProfesor"];
$idMateria = $_POST["IdMateria"];

$oProfesores = new profesoresDAO();
$result = $oProfesores->Grupos($idProfesor, $idMateria);
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            GRUPOS
        </h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <div style="padding-left:10px; padding-right:10px; ">
            <?php
            while ($itemGrupos = mysqli_fetch_assoc($result)) {
                ?>
                <a class="btn btn-lg btn-success" href="#" style="margin: 5px;" >
                    <i class="fa fa-flag fa-2x pull-left"></i> <?php echo $itemGrupos["nombreGrupo"]; ?><br><small><?php echo $itemGrupos["nombreJornada"]; ?></small>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>

