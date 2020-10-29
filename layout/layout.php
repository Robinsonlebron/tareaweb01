<?php
function invocarheader($isPage=false){
  $folder=($isPage) ?"../":"";
$header = <<<EOF

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <title>Registro de estudiantes</title>

    

    <!-- Bootstrap core CSS -->
<link href="{$folder}assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{$folder}assets\css\style.css" rel="stylesheet" type="text/css">




   
    <!-- Custom styles for this template -->
   
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Esta es una tarea practica de la materia programacion web es un CRUD para registrar estudiantes y ver su status. </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><p>Follow on Instagram:Robinsonlebron1_</p></li>
            <li><p>Like on Facebook:Robinson Lebron</p></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="{$folder}IndexRegistro.php" class="navbar-brand d-flex align-items-center">
        
        <strong>Inicio</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
EOF;

echo $header;

}


function invocarfooter($isPage=false){
  $folder=($isPage) ?"../":"";
  $footer = <<<EOF
  
  <footer class="text-muted">
  <div class="container">
    <p class="float-right">
    </p>
    <p>Registro de estudiantes ©</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{$folder}assets\js\bootstrap.min.js"></script>

</body></html>
  
EOF;
  
  echo $footer;
  
  }
  
?>