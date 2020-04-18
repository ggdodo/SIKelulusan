<?php
include('../config.php');
mysql_query("delete from tbl_hubungi where id_hubungi='$_POST[id]'");
?>