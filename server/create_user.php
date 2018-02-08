<?php

  require('lib.php');

  $con = new ConectorBD();

  if ($con->initConexion('agenda')=='OK') {

    $datos['Usuario'] = "oscar@live.com";
    $datos['Contrasena']=1234;//password_hash("1234",PASSWORD_BCRYPT);
    $datos['Nombre_Completo'] ="oscar Castro";
    $datos['Fecha_Nacimiento']="1984-12-06";    

    if ($con->insertData('agenda_usuarios', $datos)) {
      echo "Se insertaron los datos correctamente";
    }else echo "Se ha producido un error en la inserción";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }




 ?>
