<?php
include('../config.php');
if ($_POST['tipe']=='user') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = md5($_POST['pass']);
    $level_user = $_POST['level_user'];
    $id_user = $_POST['id'];
    $mysqli->query("UPDATE tbl_user SET username='$username', pass='$pass', nama='$nama', level_user='$level_user' WHERE id_user=10");
    echo "<div style='background-color:#000000; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim. <a href='index.php?page=user'>Lihat Data Admin.</a></div>";
} else if ($_POST['tipe']=='siswa') {
    $nama = $_POST['nama'];
    $tgllhr = $_POST['tgllhr'];
    $address = $_POST['address'];
    $jurusan = $_POST['jurusan'];
    $id_user = $_POST['id'];
    $mysqli->query("UPDATE tb_student SET nama='$nama', tgllhr='$tgllhr', addresse='$address', sekolah='$jurusan' WHERE noujian='$id_user'");
    echo "<div style='background-color:#000000; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim. <a href='index.php?page=data-siswa'>Lihat Data Admin.</a></div>";
} else {
    echo "tidak ada";
}
?>