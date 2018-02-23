<?php

  require('lib.php');

  $con = new ConectorBD();



$user=$_POST["username"];
$pass=$con->encriptar($_POST["password"]);





   //$result=$con->initConexion('agenda')
  if ($con->initConexion('agenda')=='OK') {
      $consulta=$con->consultar(['agenda_usuarios'], ['*'],'where Contrasena ="'.$pass.'" AND Usuario="'.$user.'"');
      

    if ($consulta->num_rows !=0 ){

        $fila=$consulta->fetch_assoc();
       
                $resultado['msg']='OK';
                session_start();
                $_SESSION['user']=$fila['Id_Usuario'];

    }else $resultado['msg']='Usuario o contraseña incorrecta';

  }else {
    $resultado['msg']='Se presentó un error en la conexión';
  }

  echo json_encode($resultado);
   $con->cerrarConexion();


 ?>
