<?php
include '../helpers/utilidades.php';
session_start();
$estudiante=$_SESSION['estudiantes'];
if(isset($_GET['id'])){
    $estudianteid=$_GET['id'];

    $ElementIndex=getIndexElement($estudiante,'id',$estudianteid);
    unset($estudiante[$ElementIndex]);
    $_SESSION['estudiantes']=$estudiante;


}

header("Location: ../IndexRegistro.php");
exit();
?>