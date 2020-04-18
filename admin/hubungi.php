<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapuspesan.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})
	</script>
<link href="../css/thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h3>Hubungi Kami - Kotak Pesan Masuk</h3>
<div class="cleaner_h5"></div>
<div class="well animasi2">
<fieldset>
<legend>Daftar Pesan Yang Masuk</legend>
<table class="table table-striped table-hover">
<tr><td>No.</td><td>Nama Pengirim</td><td>Pesan</td><td>Email</td><td>Aksi</td></tr>
<?php
include('../config.php');
$q = $mysqli->query("select * from tbl_hubungi order by id_hubungi DESC");
$n = 1;
while($r = $q->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["pesan"].'</td><td>'.$r["email"].'</td>
	<td><a href="#" class="delbutton" id="'.$r['id_hubungi'].'" href="#" ><div id="box-link">Hapus</div></a></td>
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
</div>