<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cetak Semua SK</title>
<style>
    @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div align="right"><button class="no-print" onclick="window.print();">Cetak</button></div>
<?php
include('config.php');
include('data-sekolah.php');
$noujian = $_GET['noujian'];
$q = $mysqli->query("SELECT * FROM tb_student where noujian = '$noujian'");
while($r = $q->fetch_array(MYSQLI_ASSOC))
{
  echo '<table width="800" align="center">';
  echo '<tr>
  <td><img src="'.$logo_sekolah.'" width="107" height="107" /> <hr></td>
    <td colspan="3"><div align="center">
      <h3>'.$lembaga.'<br></h3>
      <h2>'.$nama_sekolah.'<br></h2>
        Alamat : '.$alamat_sekolah.'<br> Website : '.$web_sekolah.' & e-mail : '.$email_sekolah.'</h3>
    </div><hr></td>
  </tr>';
  
   echo '<tr>
    <td colspan="4"><div align="center">
      <br>
      <p><b><u>SURAT KETERANGAN KELULUSAN</u></b>
      <br>Nomor : SMK.11.12.702/PP.01.1/05/2018</p>
    </div></td>
  </tr>';
  
  echo '<tr>
    <td colspan="4"><div align="justify">
      <br>
      <p>Yang bertanda tangan di bawah ini Kepala '.$nama_sekolah.' Menerangkan Bahwa :</p>
      <p><br />
      </p>
    </div></td>
  </tr>';
  echo '<tr>
    <td width="107">&nbsp;</td>
    <td width="129">No Ujian</td>
    <td colspan="2">: '.$r['noujian'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Nama</td>
    <td colspan="2">: '.$r['nama'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Tanggal Lahir</td>
    <td colspan="2">: '.$r['tgllhr'].' </td>
  </tr>';
  echo '<tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td colspan="2">: IX (Sembilan) </td>
  </tr>';

  echo '<tr>
    <td colspan="4"><div align="justify">
      <p>&nbsp;</p>
      <p>Telah mengikuti Ujian Nasional, Ujian Tulis Sekolah dan Ujian Praktik Sekolah pada <br>Tahun Pelajaran 2017/2018 di '.$nama_sekolah.' dinyatakan:</p>
    </div></td>
  </tr>';
  
    echo '<tr>
    <td></td>
    <td></td>
    <td><div align="center"><img src="images/'.$r['ketgambar'].'.jpg" width="200" height="50"/></div></td>
  </tr>';
  
      echo '<tr>
    <td colspan="4"><div align="justify">
      <p>Dengan nilai sebagai berikut</p>
    </div></td>
  </tr>';
  
  echo '<tr>
  <td colspan="4"><div align="justify">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai UNBK</th>
        <th>Nilai USBN</th>
        <th>Nilai Akhir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bahasa Indonesia</td>
        <td>'.$r['indo'].'</td>
        <td>'.$r['nsindo'].'</td>
        <td>'.$r['naindo'].'</td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td>'.$r['mat'].'</td>
        <td>'.$r['nsmat'].'</td>
        <td>'.$r['namat'].'</td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td>'.$r['inggris'].'</td>
        <td>'.$r['nsinggris'].'</td>
        <td>'.$r['nainggris'].'</td>
      </tr>
        <td>Teori Kejuruan</td>
        <td>'.$r['ipa'].'</td>
        <td>'.$r['nsipa'].'</td>
        <td>'.$r['naipa'].'</td>
      </tr>
    </tbody>
  </table>
</div></td>
</tr>';


    echo '<tr>
    <td colspan="4"><div align="justify">
      <p>&nbsp;</p>
      <p>Demikian Surat Keterangan ini agar dipergunakan sebagaimana mestinya.</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>';
  
  
  echo '<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="321"><p>'.$tanggal_surat.'  <br />
      Kepala '.$nama_sekolah.',</p>
      <p><img src="images/ttd.jpg" width="100" height="100" />  <br />
      '.$kepala_sekolah.'<br>
    NIP. '.$nip.'</p></td>
  </tr>';
  echo '<tr>
    <td colspan="4"><p>&nbsp;</p>
    <p>Catatan :  <br />- Bagi siswa yang belum menyelesaikan administrasi harap segera diselesaikan.<br />  - Untuk siswa yang mendapatkan keterangan PANGGILAN. Silakan datang kesekolah  hubungi panitia.</p></td>
  </tr>';
echo '</table>';
}
?>
</body>
</html>