<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "config.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from tb_student where name like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h4> Hasil Pencarian </h4>";
echo "<table class='table table-striped table-hover'>";
echo "
<thead>
<tr>
<th>No Peserta</th>
<th>Nama Siswa</th>
<th>Nilai Bhs Indonesia</th>
<th>Nilai Bhs Inggris</th>
<th>Nilai Matematika</th>
<th>Nilai IPA</th>
<th>Keterangan</th>
</tr>
</thead>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tbody>
<tr class='info'>
<td>".$data['noujian']."</td>
<td>".$data['name']."</td>
<td>".$data['indo']."</td>
<td>".$data['inggris']."</td>
<td>".$data['mat']."</td>
<td>".$data['ipa']."</td>
<td>".$data['ket']."</td>
</tr>
</tbody>";
}
echo "</table>";
?>
<a href="index.php" class="btn btn-primary">Kembali</a>
</body>
</html>