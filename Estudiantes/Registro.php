<?php
include '../layout/layout.php';
include '../helpers/utilidades.php';
session_start();

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['activo']) && isset($_POST['carrera']) ){
 

  $_SESSION['estudiantes']=isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']:array();

  $estudiante=$_SESSION['estudiantes'];
$estudianteid = 1;


if(!empty($estudiante)){

  $ultimoelemento= getLastElement($estudiante);
  $estudianteid=$ultimoelemento['id'] + 1;



}

array_push($estudiante, ['id' =>$estudianteid, 'nombre'=> $_POST['nombre'], 'apellido'=>$_POST['apellido'], 'activo'=>$_POST['activo'],'carrera'=>$_POST['carrera'] ]);


$_SESSION['estudiantes']=$estudiante;

header("Location: ../IndexRegistro.php");
exit();
}
?>

<?php invocarheader(true);?>
<main role="main">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title ">Registrar alumno</h5>
        
        <form action="Registro.php" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>

  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido">
  </div>

  <label for="status">Status</label>
  <div class="form-group form-check">

    <input type="checkbox" class="form-check-input" id="activo" name="activo">
    <label class="form-check-label" for="activo">Activo</label>
  </div>

  <div class="form-group">
    <label for="carrera">Carrera</label>
    <select name="carrera" class="form-control" id="carrera">
    <?php foreach($carrera as $id => $text): ?>
    <option value="<?php echo $id; ?>"> <?php echo $text; ?> </option>
    <?php endforeach;?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Registrar Estudiante</button>
</form>
        
      </div>
    </div>
  </div>

</main>

<?php invocarfooter(true);?>