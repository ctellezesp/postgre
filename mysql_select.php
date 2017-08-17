<?php
require 'mysql_conection.php';
$sql = "select id, nombre from consultas"; 

	$result = $conn -> query($sql);

	$grandote = array();

	if ($result->num_rows>0){ //verificando que tenga resultados
		while ($row = $result-> fetch_assoc()) { //asignando cada resultado de la pila
			$chiquitos = array('id' => $row['id'], 'nombre' => $row['nombre']);
			array_push($grandote, $chiquitos);
		}
		
	}
echo json_encode($grandote);
?>