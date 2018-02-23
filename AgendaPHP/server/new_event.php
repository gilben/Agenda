<?php


session_start();
if($_SESSION['user']){

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
  $datos['Id_usuario']=$_SESSION['user'];
    
    
     if($con->insertData('agenda_eventos',$datos))
     {
         $result['msg']= "OK";
     }else $result['msg']="Error al insertar datos";
     
    
    
}else
{
    $result['msg']= "Error al conectar con el servidor";
}



  echo json_encode($result);
$con->cerrarConexion();


}else $result['msg']="Debe iniciar sesion nuevamente, el tiempo ha expirado";



 ?>
