<?php

require('lib.php');
$con=new ConectorBD();

if($con->initConexion('agenda')=='OK')
{
    
  $datos['Titulo']=$_POST['titulo'];
  $datos['Fecha_Inicio']=$_POST['start_date']; 
  $datos['Dia_completo']=$_POST['allDay']==='true'? 1:0;    
  $datos['Fecha_Fin']=$_POST['end_date'];
  $datos['Hora_Fin']=$_POST['end_hour'];
  $datos['Hora_Inicio']=$_POST['start_hour'];
    
    
     if($con->insertData('agenda_eventos',$datos))
     {
         $result= "OK";
     }else $result="Error al insertar datos";
     
    
    
}else
{
    $result= "Error al conectar con el servidor";
}



  echo $result;
$con->cerrarConexion();

 ?>
