<?php
include 'layout/layout.php';
include 'helpers/utilidades.php';

session_start();
$_SESSION['estudiantes']=isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']:array();
$ListadoEstudiante=$_SESSION['estudiantes'];

if(!empty($ListadoEstudiante)){
if(isset($_GET['carreraid'])){



  $ListadoEstudiante= buscarPropiedad($ListadoEstudiante,'carrera', $_GET['carreraid']);

}


}
?>

<?php invocarheader();?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Registro de estudiantes</h1>
      <p class="lead text-muted">Pulse el boton para registrar los datos personales un estudiante</p>
      <p>
        <a href="Estudiantes/Registro.php" class="btn btn-primary my-2">Registrar estudiante</a>
        
      </p>
    </div>
  </section>
  <div class style="margin-bottom:1%;" class="row">

<div class="col-md-13">

<div class="col-md-13">
<div class="col-md-12 btn-group ">

<a href="IndexRegistro.php?carreraid=1" class="btn btn-dark text-light">Software</a>
<a href="IndexRegistro.php?carreraid=2" class="btn btn-dark text-light">Seguridad</a>
<a href="IndexRegistro.php?carreraid=3" class="btn btn-dark text-light">Mecatronica</a>
<a href="IndexRegistro.php?carreraid=4" class="btn btn-dark text-light">Multimedia</a>
<a href="IndexRegistro.php?carreraid=5" class="btn btn-dark text-light">Sonido</a>
<a href="IndexRegistro.php?carreraid=6" class="btn btn-dark text-light">Manufactura</a>
<a href="IndexRegistro.php" class="btn btn-dark text-light">Todos</a>

</div>
</div>
</div>
</div>
  <div class="album py-5 bg-light">
    <div class="container">

   

       <div class="row">
       <?php if(empty($ListadoEstudiante)):?>
       <h2>No hay Estudiantes registrados</h2>
       <?php  else: ?>

       <?php foreach ($ListadoEstudiante as $estudiante): ?>         
          <div class="col-md-4">
             <div class="card" style="width: 18rem;">
                 <div class="card-header"><?php echo $estudiante['nombre'];?></div>
                        <ul class="list-group list-group-flush">
                  <li class="list-group-item"><?php echo $estudiante['apellido'];?></li>
              <li class="list-group-item"><?php echo $estudiante['activo'];?></li>
         <li class="list-group-item"><?php echo GetCarrer($estudiante['carrera']); ?></li>
         
       </ul>
       <div class="card-body">
    <a href="Estudiantes/editar.php?id=<?php echo $estudiante['id'];?>" class="card-link">Editar</a>
    <a href="Estudiantes/eliminar.php?id=<?php echo $estudiante['id'];?>" class="card-link">Eliminar</a>
  </div>
      </div>
    </div>
    <?php endforeach?>
       <?php endif;?>
  </div>
</div>
</div>
  

</main>

<?php invocarfooter();?>