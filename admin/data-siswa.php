<h3>Data Siswa</h3>
<div class="well animasi2">
<fieldset>
<legend>Nama-Nama Data Siswa</legend>
<table class="table table-striped table-hover">
<thead>
<th>No</th>
<th>No Ujian Peserta</th>
<th>Nama Siswa</th>
<th>Nilai Bhs Indonesia</th>
<th>Nilai Bhs Inggris</th>
<th>Nilai Matematika</th>
<th>Nilai IPA</th>
<th>Jurusan</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<?php
include('../config.php');
$q = $mysqli->query("select * from tb_student");
$n = 1;
while($r = $q->fetch_array(MYSQLI_ASSOC))
{
	$ket = "-";
	$kode_jur = $r["sekolah"];
	if($r["ket"] == 1){
		$ket = "LULUS";
	} elseif($r["ket"] == 0) {
		$ket = "TIDAK LULUS";
	} elseif($r["ket"] == 2) {
		$ket = "DITANGGUHKAN";
	} else {
		$ket = "BUKAN KETENTUAN";
	}

	$ket_jur = $mysqli->query("select * from tbl_jurusan where kode ='$kode_jur' ");
	$ket_jurusan = $ket_jur->fetch_array(MYSQLI_ASSOC);

	echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["noujian"].'</td><td>'.$r["nama"].'</td><td>'.$r["indo"].'</td><td>'.$r["inggris"].'</td><td>'.$r["mat"].'</td><td>'.$r["ipa"].'</td><td>'.$ket_jurusan["jurusan"].'</td><td>'.$ket.'</td><td><a href="#" class="delbutton" id="'.$r['noujian'].'" href="#" ><div id="box-link">Hapus</div></a> <a href="index.php?page=edit-siswa&id_user='.$r['noujian'].'"><div id="box-link">Edit</div></a></td></tr></tbody>';
	$n++;
}
?>
</table>
*) Anda dapat mempersiapkan dan mengedit data melalui microsoft Excel. Format file dapat di download <a href="contoh-data.xls">Disini</a><br />
*) Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport <a href="index.php?page=import">disini.</a>
</div>
<a href="index.php?page=hapus" class="btn btn-primary">Hapus Semua Data</a>
</fieldset>