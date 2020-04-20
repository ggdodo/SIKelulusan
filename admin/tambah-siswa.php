		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap-datepicker.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/datepicker.css">
		<script type="text/javascript">
			$(document).ready(function() {
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						noujian: "required",
						alamat: "required",
					},
					messages: {
						nama: "* Kosong",
						noujian: "* Kosong",
						alamat: "* Kosong"
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('index.php?page=tambahsiswa', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);

							document.frm.nama.value = "";
							document.frm.noujian.value = "";
							document.frm.alamat.value = "";
						});
					}
				});
			});
		</script>
		<?php
		include('../koneksi.php');
		$q = $mysqli->query("select * from tbl_jurusan");
		$s = $mysqli->query("select * from tbl_kode");
		?>
		<div id="rightPan">
			<h3>Tambah Data Siswa</h3>
			<div class="well animasi2">
				<div class="cleaner_h5"></div>
				<div id="hasil"></div>
				<div class="cleaner_h5"></div>
				<fieldset>
					<form class="form-horizontal" method="post" action="" name="frm" id="frm">
						<legend>Data Siswa</legend>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nama</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nama" placeholder="Nama Anda" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nomor Ujian</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="noujian" placeholder="Nomor Ujian" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Tanggal Lahir</label>
							<div class="col-lg-10">
								<input type="text" name="tgllhr" class="form-control datepicker" placeholder="Tanggal"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Alamat</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="alamat" placeholder="Alamat" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Jurusan</label>
							<div class="col-lg-10">
								<select name="jurusan" class="form-control">
									<option value="" disabled selected>Pilih Jurusan</option>
									<?php while ($r = $q->fetch_array(MYSQLI_ASSOC)) : ?>
										<option value="<?php echo $r['kode']; ?>"><?php echo $r['jurusan']; ?></option>
									<?php
									endwhile; ?>
								</select>
							</div>
						</div>
						<legend>Nilai Sekolah Siswa</legend>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Bahasa Indonesia</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nsindo" placeholder="Nilai Sekolah Bahasa Indonesia" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Bahasa Inggris</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nsinggris" placeholder="Nilai Sekolah Bahasa Inggris" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Matematika</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nsmat" placeholder="Nilai Sekolah Matematika" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Kejuruan</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nskejuruan" placeholder="Nilai Sekolah Matematika" size="35">
							</div>
						</div>
						<legend>Nilai Nasional Siswa</legend>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Indonesia</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="naindo" placeholder="Nilai Nasional Bahasa Indonesia" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Inggris</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nainggris" placeholder="Nilai Nasional Bahasa Indonesia" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Matematika</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="namat" placeholder="Nilai Nasional Matematika" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Nilai Kejuruan</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nakejuruan" placeholder="Nilai Nasional Kejuruan" size="35">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-lg-2 control-label">Jurusan</label>
							<div class="col-lg-10">
								<select name="ket" class="form-control">
									<option value="" disabled selected>Keterangan</option>
									<?php while ($t = $s->fetch_array(MYSQLI_ASSOC)) : ?>
										<option value="<?php echo $t['kode']; ?>"><?php echo $t['arti']; ?></option>
									<?php
									endwhile; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<input type="submit" name="submit" id="submit" value="Simpan Data" class="btn btn-primary" onclick="tb_remove()">
							</div>
						</div>
					</form>
				</fieldset>
			</div>
			<script type="text/javascript">
				$(function() {
					$(".datepicker").datepicker({
						format: 'dd-mm-yyyy',
						autoclose: true,
						todayHighlight: true,
					});
				});
			</script>