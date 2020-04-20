<?php
include('../config.php');
$pass = md5($_POST['password']);
$user = $mysqli->real_escape_string($_POST['username']);
$login = sprintf("SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass'", $mysqli->real_escape_string($user), $mysqli->real_escape_string($pass));
$datetime_asiaok = date("d-m-Y H+7:i:s");
$update_log = "UPDATE tbl_user SET log_activity='$datetime_asiaok' WHERE username='$user' AND pass='$pass'";
$up_log = $mysqli->query($update_log);
$cek_lagi = $mysqli->query($login);
$ketemu = $cek_lagi->num_rows;
$r = $cek_lagi->fetch_array(MYSQLI_ASSOC);
if ($ketemu > 0 && $r['level_user'] == 0) {
  session_start();
  $_SESSION['namauser'] = $r['nama'];
  $_SESSION['kode'] = $r['id_user'];
  $_SESSION['username'] = $r['username'];
  echo "<meta http-equiv='refresh' content='0; url=admin/index.php?page=home'>";
} elseif ($ketemu > 0 && $r['level_user'] == 1) {
  session_start();
  $_SESSION['namauser'] = $r['nama'];
  $_SESSION['kode'] = $r['id_user'];
  $_SESSION['username'] = $r['username'];
  echo "<meta http-equiv='refresh' content='0; url=superadmin/index.php?page=home'>";
} else {
?>
  <script>
    alert("Username atau password salah...!!!");
  </script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>