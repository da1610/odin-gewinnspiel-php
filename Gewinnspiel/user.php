<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gewinnspiel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$id = 1;
$stmt = $conn->prepare("SELECT * FROM user WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$var = "hab nix";

$res = $stmt->get_result();

var_dump($res);

$row = $res->fetch_assoc();

var_dump($row);

foreach($row as $key=>$val)
{
	if($key != "ID") {
		echo $key;
		echo "<br>";
		var_dump($val);
		echo "<br>";
	}
}

//$stmt->store_result();

// echo "klappt";

$stmt->close();
?>