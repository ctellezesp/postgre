<?php
	require 'pg_conection.php';

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];

	$sql = "select dinero from consultas where id = $id"; 

	$result = pg_query($conn, $sql);

if($result){
	while ($row = pg_fetch_row($result)){
		$resultado  = array('dinero' => $row[0]);
		
	}
}

	echo json_encode($resultado);
?>