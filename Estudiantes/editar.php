<?php
include '../layout/layout.php';
include '../helpers/utilidades.php';
session_start();
if(isset($_GET['id'])){

  $estudianteid=$_GET['id'];

  $_SESSION['estudiantes']=isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']:array();
  
  $estudiante=$_SESSION['estudiantes'];

  $elemento=buscarPropiedad($estudiante,'id',$estudianteid)[0];
  $elementIndex=getIndexElement($estudiante,'id',$estudianteid);

  if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['activo']) && isset($_POST['carrera']) ){
 

  $updateEstudiante= ['id' =>$estudianteid, 'nombre'=> $_POST['nombre'], 'apellido'=>$_POST['apellido'], 'activo'=>$_POST['activo'],'carrera'=>$_POST['carrera'] ];

  $estudiante[$elementIndex]=$updateEstudiante;
  
  
  $_SESSION['estudiantes']=$estudiante;
  
  header("Location: ../IndexRegistro.php");
  exit();
  
}
}
else{

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
        
        <form action="editar.php?id=<?php echo $elemento['id']?>" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text"value="<?php echo $elemento['nombre'] ?>" class="form-control" id="nombre" name="nombre">
  </div>

  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text"value="<?php echo $elemento['apellido'] ?>" class="form-control" id="apellido" name="apellido">
  </div>

  <label for="status">Status</label>
  <div class="form-group form-check">

    <input type="checkbox" value="<?php echo $elemento['activo'] ?>"  class="form-check-input" id="activo" name="activo">
    <label class="form-check-label" for="activo">Activo</label>
  </div>

  <div class="form-group">
    <label for="carrera">Carrera</label>
    <select name="carrera" class="form-control" id="carrera">


    <?php foreach($carrera as $id => $text): ?>
<?php if($id==$elemento['carrera']): ?>
<option selected value="<?php echo $id; ?>"> <?php echo $text; ?></option>
<?php else:?>
  <option  value="<?php echo $id; ?>"> <?php echo $text; ?></option>
<?php endif;?>
    <?php endforeach;?>
     
   
    </select>
  </div>

  <button type="submit" class="btn btn-success">Actualizar Estudiante</button>
</form>
        
      </div>
    </div>
  </div>

</main>

<?php invocarfooter(true);?>