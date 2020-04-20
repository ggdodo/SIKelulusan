<style>
	.results tr[visible='false'],
	.no-result {
		display: none;
	}

	.results tr[visible='true'] {
		display: table-row;
	}

	.counter {
		padding: 8px;
		color: #ccc;
	}

	/* Set a style for all buttons */
	.btna {
		background-color: green;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	/* Set a style for all buttons */
	.btnb {
		background-color: red;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	.btna:hover {
		opacity: 1;
		text-decoration: none;
	}

	/* Float cancel and delete buttons and add an equal width */
	.cancelbtn,
	.deletebtn {
		float: left;
		width: 50%;
	}

	/* Add a color to the cancel button */
	.cancelbtn {
		background-color: #ccc;
		color: black;
	}

	/* Add a color to the delete button */
	.deletebtn {
		background-color: #f44336;
	}

	/* Add padding and center-align text to the container */
	.containeri {
		padding: 16px;
		text-align: center;
	}

	/* The Modal (background) */
	.modali {
		display: none;
		/* Hidden by default */
		position: fixed;
		/* Stay in place */
		z-index: 1;
		/* Sit on top */
		left: 0;
		top: 0;
		width: 100%;
		/* Full width */
		height: 100%;
		/* Full height */
		overflow: auto;
		/* Enable scroll if needed */
		background-color: whitesmoke;
		padding-top: 50px;
	}

	/* Modal Content/Box */
	.modali-content {
		background-color: #fefefe;
		padding-top: 15px;
		margin: 5% auto 15% auto;
		/* 5% from the top, 15% from the bottom and centered */
		border: 1px solid #888;
		width: 80%;
		/* Could be more or less, depending on screen size */
	}

	/* Style the horizontal ruler */
	/* hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	} */

	/* The Modal Close Button (x) */
	.close {
		position: absolute;
		right: 35px;
		top: 15px;
		font-size: 40px;
		font-weight: bold;
		color: #f1f1f1;
	}

	.close:hover,
	.close:focus {
		color: #f44336;
		cursor: pointer;
	}

	/* Clear floats */
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}

	/* Change styles for cancel button and delete button on extra small screens */
	@media screen and (max-width: 300px) {

		.cancelbtn,
		.deletebtn {
			width: 100%;
		}
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$(".search").keyup(function() {
			var searchTerm = $(".search").val();
			var listItem = $('.results tbody').children('tr');
			var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

			$.extend($.expr[':'], {
				'containsi': function(elem, i, match, array) {
					return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
				}
			});

			$(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
				$(this).attr('visible', 'false');
			});

			$(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
				$(this).attr('visible', 'true');
			});

			var jobCount = $('.results tbody tr[visible="true"]').length;
			$('.counter').text(jobCount + ' item');

			if (jobCount == '0') {
				$('.no-result').show();
			} else {
				$('.no-result').hide();
			}
		});
	});
</script>
<h3>Data Siswa</h3>
<div class="well animasi2">
	<fieldset>
		<legend>Nama-Nama Data Siswa</legend>
		<input type="text" class="search form-control" placeholder="Cari nama">
		<table class="table table-hover table-bordered results">
			<thead>
				<tr>
					<th>No Urut</th>
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
			while ($r = $q->fetch_array(MYSQLI_ASSOC)) {
				$ket = "-";
				$kode_jur = $r["jurusan"];
				if ($r["ket"] == 1) {
					$ket = "LULUS";
				} elseif ($r["ket"] == 0) {
					$ket = "TIDAK LULUS";
				} elseif ($r["ket"] == 2) {
					$ket = "DITANGGUHKAN";
				} else {
					$ket = "BUKAN KETENTUAN";
				}
				$ket_jur = $mysqli->query("select * from tbl_jurusan where kode ='$kode_jur' ");
				$ket_jurusan = $ket_jur->fetch_array(MYSQLI_ASSOC);
				echo '<tbody><tr class="info"><td>' . $n . '</td><td>' . $r["noujian"] . '</td><td>' . $r["nama"] . '</td><td>' . $r["indo"] . '</td><td>' . $r["inggris"] . '</td><td>' . $r["mat"] . '</td><td>' . $r["kejuruan"] . '</td><td>' . $ket_jurusan["jurusan"] . '</td><td>' . $ket . '</td><td><a href="index.php?page=hapussiswa&id=' . $r['noujian'] . '" class="delbutton"><div id="box-link">Hapus</div></a> <a href="index.php?page=edit-siswa&id_user=' . $r['noujian'] . '"><div id="box-link">Edit</div></a></td></tr></tbody>';
				$n++;
			}
			?>
		</table>
		<!-- *) Anda dapat mempersiapkan dan mengedit data melalui microsoft Excel. Format file dapat di download <a href="contoh-data.xls">Disini</a><br />
		*) Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport <a href="index.php?page=import">disini.</a> -->
</div>
<a onclick="document.getElementById('id01').style.display='block'" class="btnb">Hapus Semua Data</a>
<a href="index.php?page=tambah-siswa" class="btna">Tambah Siswa</a>
<!-- <button onclick="document.getElementById('id01').style.display='block'">Hapus Semua Data</button> -->
<div id="id01" class="modali">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
		<div class="containeri modali-content">
			<h1>Hapus semua data?</h1>
			<p>Apakah anda yakin menghapus semua data?</p>
			<div class="clearfix">
				<!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
				<a onclick="document.getElementById('id01').style.display='none'" class="btna cancelbtn">Batal</a>
				<a href="index.php?page=hapus" class="btna deletebtn">Hapus Semua Data</a>
			</div>
		</div>
</div>
<script>
	// Get the modal
	var modal = document.getElementById('id01');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
</fieldset>