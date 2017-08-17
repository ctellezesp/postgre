<?php
	$dbopst = parse_url(getenv('DATABASE_URL'));
    $host = $dbopst["host"];
    $port = $dbopst["port"];
    $db = ltrim($dbopst["path"],'/');
    $user = $dbopst["user"];
    $pass = $dbopst["pass"];
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$db." user=".$user." password=".$pass) or die ("fail connection");
?>