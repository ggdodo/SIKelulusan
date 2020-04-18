<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "db_kelulusan";
$mysqli = new mysqli($host, $user, $pass, $dbName);
$jurusan = $mysqli->query("select * from tbl_jurusan");
//mysqli_connect($host, $user, $pass, $dbName);

//mysql_select_db($dbName)
//or die ("Connect Failed !! : ".mysql_error());
?>