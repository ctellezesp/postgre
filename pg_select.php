<?php
require 'pg_conection.php';

$sql = "select id, nombre from consultas"; 

	$result = pg_query($conn, $sql);

	$grandote = array();

		while ($row = pg_fetch_row($result)) { //asignando cada resultado de la pila
			$chiquitos = array('id' => $row[0], 'nombre' => $row[1]);
			array_push($grandote, $chiquitos);
		}
		
echo json_encode($grandote);
?>