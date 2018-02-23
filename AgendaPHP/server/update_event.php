
<?php
session_start();
if($_SESSION['user']){

require('lib.php');
$con=new ConectorBD();




if($con->initConexion('agenda')=='OK')
{
	$condicion='id_evento='.$_POST['id'];
	$datos['Fecha_inicio']='"'.$_POST['start_date'].'"';
	$datos['Hora_inicio']='"'.$_POST['start_hour'].'"';
	$datos['Fecha_fin']='"'.$_POST['end_date'].'"';
	$datos['Hora_fin']='"'.$_POST['end_hour'].'"';

    
    if( $d=$con->actualizarRegistro('agenda_eventos',$datos,$condicion))
    {
    	$result['msg']='Registro Actualizado';
   }else $result['msg']='Error al Actualizar';
    
    
}else 
{
    $result['msg']= "Error al conectar con el servidor";
}



echo json_encode($result);
$con->cerrarConexion();


}else $result['msg']="Debe iniciar sesion nuevamente, el tiempo ha expirado";



 ?>
