<?php

  require('lib.php');

  $con = new ConectorBD();



$user= $_POST["username"];
$pass=$con->encriptar($_POST["password"]);





   //$result=$con->initConexion('agenda')
  if ($con->initConexion('agenda')=='OK') {
      $consulta=$con->consultar(['agenda_eventos'], ['*']);
      

    if ($consulta->num_rows !=0 ){

        $fila=$consulta->fetch_assoc();
       
                $resultado="OK";
                session_start();
                $_SESSION['username']=$fila['Nombre_completo'];

    }else $resultado="Usuario o contraseña incorrecta";

  }else {
    $resultado="Se presentó un error en la conexión";
  }

  echo $resultado;
$con->cerrarConexion();


 ?>
