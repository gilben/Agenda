<?php

  require('lib.php');

  $con = new ConectorBD();

  if ($con->initConexion('agenda')=='OK') {

    $datos['Usuario'] = "ant@live.com";
    $datos['Contrasena']=$con->encriptar('1234');
    $datos['Nombre_Completo'] ="oscar Castro";
    $datos['Fecha_Nacimiento']="1984-12-06";    

    if ($con->insertData('agenda_usuarios', $datos)) {
      $result['msg']= "Se insertaron los datos correctamente";
    }else $result['msg']= "Se ha producido un error en la insercion";

    $con->cerrarConexion();

  }else {
    $result['msg']= "Se presentó un error en la conexión";
  }


//echo json_encode($result);
  echo json_encode($result);

 ?>
