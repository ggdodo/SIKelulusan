<?php
include('../config.php');
$nama = $_POST['nama'];
$noujian = $_POST['noujian'];
$tgllhr = $_POST['tgllhr'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$nsindo = number_format($_POST['nsindo']);
$nsmat = number_format($_POST['nsmat']);
$nsinggris = number_format($_POST['nsinggris']);
$nskejuruan = number_format($_POST['nskejuruan']);
$naindo = number_format($_POST['naindo']);
$namat = number_format($_POST['namat']);
$nainggris = number_format($_POST['nainggris']);
$nakejuruan = number_format($_POST['nakejuruan']);
$indo = (60/100*$nsindo) + (40/100*$naindo);
$mat = (60/100*$nsmat) + (40/100*$namat);
$inggris = (60/100*$nsinggris) + (40/100*$nainggris);
$kejuruan = (60/100*$nskejuruan) + (40/100*$nakejuruan);
$rataun = ($indo + $inggris + $mat + $kejuruan) / 4;
$ratans = ($nsindo + $nsinggris + $nsmat + $nskejuruan) / 4;
$ratana = ($naindo + $nainggris + $namat + $nakejuruan) / 4;
$ket = number_format($_POST['ket']);
$ketgambar = "";
if($ket == 0) {
	$ketgambar = 'tidaklulus';
} elseif($ket == 1) {
	$ketgambar = 'lulus';
} else {
	$ketgambar = 'ditangguhkan';
}
$mysqli->query("INSERT INTO tb_student
	(noujian,nama,tgllhr,alamat,jurusan,indo,mat,inggris,kejuruan,nsindo,nsinggris,nsmat,nskejuruan,naindo,nainggris,namat,nakejuruan,rataun,ratans,ratana,ket,ketgambar)
	VALUES
	('$noujian','$nama','$tgllhr','$alamat','$jurusan','$indo','$mat','$inggris','$kejuruan','$nsindo','$nsinggris','$nsmat','$nskejuruan','$naindo','$nainggris','$namat','$nakejuruan','$rataun','$ratans','$ratana','$ket','$ketgambar')");
echo "<div style='background-color:#000000; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim. <a href='index.php?page=data-siswa'>Lihat Data Siswa.</a></div>";
?>