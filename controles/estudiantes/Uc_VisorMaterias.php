<?php
include_once '../../clases/EstudiantesDAO.php';

$idPrograma = $_POST["idPrograma"];

$oEstudiantes = new EstudiantesDAO();
$result = $oEstudiantes->Materias($idPrograma);
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            MATERIAS
        </h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        while ($itemMateria = mysqli_fetch_assoc($result)) {
            ?>
            <button class="btn btn-perfil"><?php echo $itemMateria["materia"]; ?></button>
            <?php
        }
        ?>
    </div>
</div>