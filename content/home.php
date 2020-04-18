<html>

<head>
  <title> Halaman Pencarian </title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3 class="animasi2">Sistem Informasi Lulusan<br> SMK AL HUDA KOTA KEDIRI</h3>
  <div class="well animasi2">
    <div align="right" class="date">
      <SCRIPT language=JavaScript src="js/almanak.js"></SCRIPT>
    </div><br />
    <script>
      function cekNo() {
        var modal = document.getElementById("myModal");
        var cek = document.forms['formcarino']['noujian'].value;
        if (cek == null || cek == "") {
          modal.style.display = "block";
          return false;
        }
      }
    </script>
    <form class="form-horizontal" form name="formcarino" method="post" action="index.php?page=searchno" onSubmit="return cekNo()">
      <fieldset>
        <div align="center">
          <legend class="home animasi"> Cari Berdasarkan No Peserta Anda </legend>
        </div>
        <div class="form-group">
          <label for="noujian" class="col-lg-2 control-label">No Peserta</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="noujian" placeholder="Contoh : 21-702-001-8" size="30">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari">
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="closebtn" onclick='this.parentElement.style.display="none"; location.reload();'>&times;</span>
      <p style="font-size: 22px">Mohon maaf, silahkan isi nomor dengan Benar</p>
    </div>
  </div>
</body>

</html>