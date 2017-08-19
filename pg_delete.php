<?php
	require 'pg_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];

	$sql = "delete from consultas where id = $id";

	$result = pg_query($conn,$sql);
	
	if($result){
		$resultado = array('msg' => "Eliminado correctamente" );
	}

	else {
		$resultado = array('msg' => pg_last_error($result));
	}

	echo json_encode($resultado);

?>