<?php

$host_ip = "127.0.0.1" ;
$username = "root"; 
$password = "";
$database = "db_name";

$conn = mysqli_connect($host_ip, $username, $password, $database);



if(!$conn){

echo "Debugging errno: ".mysqli_connect_errno();
echo "<br>";
echo "Debugging error: ".mysqli_connect_error();
exit;
}

	?>
