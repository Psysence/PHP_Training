<?php

$user='root';
$pass='123456';
$host = 'localhost';
$db = 'bookstoredb';

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_error)
{
	die('Connect Error ('.$mysqli->connect_errno. ') '
	.$mysqli->connect_error);
}

?>