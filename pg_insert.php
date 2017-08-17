<?php

require "pg_conection.php";

$data = json_decode(file_get_contents('php://input'),true);

$nombre = $data[0]['value'];
$dinero = $data[1]['value'];

error_reporting(E_ALL & ~E_WARNING);

$sql = "insert into consultas(nombre, dinero) values ('$nombre',  $dinero) returning id";

$result = pg_query($conn, $sql);

  if ($result) {
  	$row = pg_fetch_result($result);
      $resultado  = array('msg' => "Insert succesful with id ". $row[0]);
  	
  } 
  else {
  	$error = pg_last_error($conn);
  	if(preg_match("/Duplicate/i", $error)){
      $resultado  = array('msg' => "Llave Duplicada");
  	}
  }

 echo json_encode($resultado);
?>
