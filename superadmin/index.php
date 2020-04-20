<?php
session_start();
if (empty($_SESSION['namauser']) and empty($_SESSION['kode'])) {
  echo "<p>Anda tidak berhak mengakses halaman ini.</p>";
} else {
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Aplikasi Sistem Informasi Kelulusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../css/bootswatch.min.css">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootswatch.js"></script>
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php?page=home" class="navbar-brand"><img src="../images/logo-bg.gif" width="40px" height="auto"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php?page=home">Beranda</a>
            </li>
            <li>
              <a href="index.php?page=data-siswa">Data Siswa</a>
            </li>
            <li>
              <a href="index.php?page=import">Import Data</a>
            </li>
            <li>
              <a href="index.php?page=user">User</a>
            </li>
            <li>
              <a href="index.php?page=hubungi">Pesan</a>
            </li>
            <li>
              <a href="../cetakskall.php">Cetak Semua SK</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php?page=logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <table height="100%" align="center" style="width: 60%">
      <tr>
        <td>
          <?php
          require "../config.php";
          $page = $_GET['page'];
          $filename = "$page.php";
          if (!file_exists($filename)) {
            include "home.php";
          } else {
            @include "$page.php";
          }
          ?>
        </td>
      </tr>
    </table>
  </body>

  </html>
<?php
}
?>