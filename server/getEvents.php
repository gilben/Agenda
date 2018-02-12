<?php

 // $r['msg']='OK';
 // echo json_encode($r);

//session_start();
//if($_SESSION['id']){
	require ('lib.php');
	 session_start();
     $IdUser=$_SESSION['user'];


	
	$con = new ConectorBD();
	$response['conexion'] = $con -> initConexion('agenda');
	if ($con -> initConexion('agenda') == 'OK') {
		$resultado = $con -> consultar(['agenda_eventos'], ['*'], 'where Id_Usuario='.$IdUser.'');
		if ($resultado -> num_rows != 0) {
			$i=0;
			while ($fila = $resultado -> fetch_assoc()) {
				$evento['id'] = $fila['id_evento'];
				$evento['title'] = $fila['Titulo'];
				if($fila['Dia_completo'] == 1){
					$evento['start'] = $fila['Fecha_inicio'];
					$evento['allDay'] = true;
				} else {
					$evento['start'] = $fila['Fecha_inicio'].'T'.$fila['Hora_inicio'];
					$evento['end'] = $fila['Fecha_fin'].'T'.$fila['Hora_inicio'];
					$evento['allDay'] = false;
				}
				$evento['color'] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
				$response['eventos'][$i] = $evento;
				$i++;
			}
		}
		$response['msg'] = 'OK';
	} else
		$response['msg'] = 'Problemas con la conexión a la base de datos';
//} else
//	$response['msg'] = 'Debe iniciar sesión';

echo json_encode($response);
//print_r( $_SESSION['id']);
?>

