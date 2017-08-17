<?php
	require 'mysql_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];

	$sql = "delete from consultas where id = $id";
	
	if ($conn->query($sql)===TRUE){
		$resultado = array('msg' => "Eliminado correctamente" );
	}
	else {
		$resultado = array('msg' => "Error".$conn->error);
	}

	echo json_encode($resultado);

?>