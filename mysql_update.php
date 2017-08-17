<?php
	require 'mysql_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];
	$dinero = $data['dinero'];

	$sql = "update consultas SET dinero='$dinero' where id= $id";
	
	if ($conn->query($sql)===TRUE){
		$resultado = array('msg' => "Datos Actualizados correctamente" );
	}
	else {
		$resultado = array('msg' => "Error".$conn->error);
	}

	echo json_encode($resultado);

?>