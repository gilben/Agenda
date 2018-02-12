<?php


session_start();
if($_SESSION['user']){

require('lib.php');
$con=new ConectorBD();




if($con->initConexion('agenda')=='OK')
{
	$datos=$_POST['id'];

    
    if( $d=$con->eliminarRegistro('agenda_eventos',$datos))
    {
    	$result['msg']='Registro Eliminado';
   }else $result['msg']='Error al eliminar';
    
    
}else 
{
    $result['msg']= "Error al conectar con el servidor";
}



echo json_encode($result);
$con->cerrarConexion();


}else $result['msg']="Debe iniciar sesion nuevamente, el tiempo ha expirado";



 ?>
