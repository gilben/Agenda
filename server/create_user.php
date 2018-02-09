<?php

  require('lib.php');

  $con = new ConectorBD();

  if ($con->initConexion('agenda')=='OK') {

    $datos['Usuario'] = "oscar@live.com";
    $datos['Contrasena']=$con->encriptar('1234');
    $datos['Nombre_Completo'] ="oscar Castro";
    $datos['Fecha_Nacimiento']="1984-12-06";    

    if ($con->insertData('agenda_usuarios', $datos)) {
      $result= "Se insertaron los datos correctamente";
    }else $result= "Se ha producido un error en la inserción";

    $con->cerrarConexion();

  }else {
    $result= "Se presentó un error en la conexión";
  }


echo $result;

 ?>
