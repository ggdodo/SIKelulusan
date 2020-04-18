		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						username: "required",
						pass: "required",
					},
					messages: {
						nama: "* Kosong",
						username: "* Kosong",
						pass: "* Kosong"
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('index.php?page=tambahuser', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
							
							document.frm.nama.value="";
							document.frm.username.value="";
							document.frm.pass.value="";
						});
					}
				});
			});
			</script>
			
<div id="rightPan">
<h3>Tambah Data User / Pengguna</h3>
<div class="well animasi2">
<div class="cleaner_h5"></div>
<div id="hasil"></div>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Input Data Pengguna / User Baru</legend>
<form class="form-horizontal" method="post" action="" name="frm" id="frm">
<div class="form-group">
      <label for="nama" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama" placeholder="Nama Anda" size="35">
      </div>
  </div>
  <div class="form-group">
      <label for="nama" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" placeholder="Username" size="35">
      </div>
  </div>
  <div class="form-group">
      <label for="nama" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="pass" placeholder="Password" size="35">
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
	