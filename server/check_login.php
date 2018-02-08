<?php

  require('lib.php');





$user= $_POST["username"];
$pass=$_POST["password"];



  $con = new ConectorBD();

   //$result=$con->initConexion('agenda')
  if ($con->initConexion('agenda')=='OK') {
      $consulta=$con->consultar(['agenda_usuarios'], ['*'],'where Contrasena ="'.$pass.'"');

    if ($consulta->num_rows !=0 ){
        
     
        $fila=$consulta->fetch_assoc();
            
           if(1==1)// if(password_verify($pass,$fila['Contrasena']))
            {
                $resultado="OK";
                session_start();
                $_SESSION['username']=$fila['Nombre_completo'];
            }
          

        
    }else $resultado="Usuario o contraseña incorrecta";



  }else {
    $resultado="Se presentó un error en la conexión";
  }

  echo $resultado;
$con->cerrarConexion();


 ?>
