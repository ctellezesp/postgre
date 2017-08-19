<?php
	require 'pg_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];
	$dinero = $data['dinero'];

	$sql = "update consultas SET dinero='$dinero' where id= $id";

	$result = pg_query($conn, $sql);
	
	if($result){
		$resultado  = array('msg' => "Datos Actualizados correctamente");
		
	}
	else {
		$resultado = array('msg' => pg_last_error($result));
	}

	echo json_encode($resultado);

?>