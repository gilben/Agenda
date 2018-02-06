<?php

  require('lib.php');

$user= "andres@live.com";  //isset($_POST["user"]);
$pass= '"$2y$10$LVwk/XUREEhgB"';  //isset($_POST["pass"]);

  $con = new ConectorBD();


  if ($con->initConexion('agenda')=='OK') {

    if ($resultado=$con->consultar(['agenda_usuarios'], ['*'])) {
     
        while ($fila=$resultado->fetch_assoc()){
            $has=$fila['Contrasena'];
           if(password_verify($pass,PASSWORD_BCRYPT))
              {
                  echo "si";
              }else
              {
                  echo "no";
              }
        }
        
        
    }else echo "Hubo un problema y los registros no fueron consultados";



  }else {
    echo "Se presentó un error en la conexión";
  }




 ?>
