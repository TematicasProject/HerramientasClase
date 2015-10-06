<?php
include_once '../../clases/profesoresDAO.php';

$idProfesor = $_POST["idProfesor"];

$oProfesores = new profesoresDAO();
$result = $oProfesores->Grupos($idProfesor);
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            GRUPOS
        </h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        while ($itemGrupos = mysqli_fetch_assoc($result)) {
            ?>
            <button class="btn btn-perfil"><?php echo $itemGrupos["grupos"]; ?></button>
            <?php
        }
        ?>
    </div>
</div>

