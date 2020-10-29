<?php

$carrera=[1=>'Software', 2=>'Seguridad Informatica', 3=>'Mecatronica', 4=>'Multimedia', 5=>'Sonido', 6=>'Manufactura' ];


function GetCarrer($carreraid){

    return $GLOBALS['carrera'][$carreraid];
}

function getLastElement($list){

$countList= count($list);
$ultimoelemento=$list[$countList-1];

return $ultimoelemento;
}


function buscarPropiedad($list, $propiedad, $valor){
    
    $filtro=[];
    foreach($list as $item){
        if($item[$propiedad]==$valor){
          array_push($filtro, $item);
        }

    }
    return $filtro;

}
function getIndexElement($list, $propiedad, $valor){
    
   $index=0;
    foreach($list as $key => $item){
        if($item[$propiedad]==$valor){
            $index=$key;
        }

    }
    return $index;

}

?>


