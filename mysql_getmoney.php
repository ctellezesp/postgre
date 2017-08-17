<?php
	require 'mysql_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];

	$sql = "select dinero from consultas where id = $id"; 

	$result = $conn -> query($sql);


	if ($result->num_rows>0){ //verificando que tenga resultados
		$row = $result -> fetch_assoc();
		$resultado  = array('dinero' => $row['dinero']);
		
	}

	echo json_encode($resultado);
?>