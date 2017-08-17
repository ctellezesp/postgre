<?php

require "mysql_conection.php";

$data = json_decode(file_get_contents('php://input'),true);

$nombre = $data[0]['value'];
$dinero = $data[1]['value'];

$sql = "insert into consultas(nombre, dinero) values ('$nombre',  $dinero)";

if ($conn->query($sql)==TRUE){
	$id = $conn->insert_id;
	$resultado  = array('msg' => "Insert succesful with id: ".$id);

}

else if($conn->errno==1062){
	$resultado  = array('msg' => "user name already exist, please select another user name" );
}
else {
	$resultado  = array('msg' => $conn->error);
}


echo json_encode($resultado);
?>
