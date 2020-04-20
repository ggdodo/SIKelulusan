<?php
include('../config.php');
$mysqli->query("delete from tb_student where noujian='$_GET[id]'");
echo "<div style='background-color:#000000; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim. <a href='index.php?page=data-siswa'>Lihat Data Siswa.</a></div>";
?>