<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#frm").validate({
			debug: false,
			rules: {
				nama: "required",
				email: {
					required: true,
					email: true
				},
				pesan: "required"
			},
			messages: {
				nama: "* Kosong",
				email: "* Tidak Valid",
				pesan: "* Kosong",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('index.php?page=kirimpesan', $("#frm").serialize(), function(data) {
					$('#hasil').html(data);

					document.frm.nama.value = "";
					document.frm.email.value = "";
					document.frm.pesan.value = "";
				});
			}
		});
	});
</script>
<h3 class="animasi2">Form Kontak Kami</h3>
<div class="cleaner_h10"></div>
<div id="hasil"></div>
<div class="well animasi2">
	<form class="form-horizontal" name="frm" method="post" id="frm">
		<fieldset>
			<legend>Silahkan Isi Form Kontak di Bawah Ini</legend>
			<div class="form-group">
				<label for="nama" class="col-lg-2 control-label">Nama Lengkap</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="nama" placeholder="Nama Anda" size="30">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="email" placeholder="Email Anda" size="30">
				</div>
			</div>
			<div class="form-group">
				<label for="pesan" class="col-lg-2 control-label">Pesan</label>
				<div class="col-lg-10">
					<textarea class="form-control" rows="3" cols="40" placeholder="Pesan Anda" name="pesan"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<input type="submit" name="submit" id="submit" value="Kirim Pesan">
				</div>
			</div>
			<div id="hasil" style="background-color:#0099FF; color:#FFFFFF; text-align:center;"></div>
		</fieldset>
	</form>
</div>