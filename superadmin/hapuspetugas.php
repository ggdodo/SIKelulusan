<?php
include('../config.php');
$mysqli->query("delete from tbl_user where id_user='$_POST[id]'");
?>