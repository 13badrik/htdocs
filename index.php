<?php
$server = 'localhost';
$user = 'root';
$password = 'admin13';
$database = 'test';

$dblink = new mysqli($server, $user, $password,$database);

if(mysqli_connect_errno())
echo '���������� �� �����������.';
else {
	$dblink->set_charset("utf8");
	//echo '���������� �����������.';
}



?>