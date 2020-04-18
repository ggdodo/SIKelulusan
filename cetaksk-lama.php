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
</head>
<body>
<div align="right"><button class="no-print" onclick="window.print();">Cetak</button></div>
<?php
include('config.php');
$noujian = $_GET['noujian'];
$q = mysql_query("SELECT * FROM tb_student where noujian = '$noujian'");
while($r = mysql_fetch_array($q))
{
  echo '<table width="800" align="center">';
  echo '<tr>
    <td><img src="images/logo-MTs.gif" width="107" height="107" /> <hr></td>
    <td colspan="3"><div align="center">
      <h3>LEMBAGA PENDIDIKAN MA"ARIF NAHDLATUL ULAMA<br></h3>
      <h2>MADRASAH TSANAWIYAH AL MA"ARIF II<br></h2>
        Alamat : Sidorejo, Tirtomoyo, Wonogiri Kode Pos:57672<br> Website : <a href= "https://www.mtsalmawa.sch.id">www.mtsalmawa.sch.id</a> e-mail : <a href="mailto:mts.almaarif2@yahoo.com">mts.almaarif2@yahoo.com</a></h3>
    </div><hr></td>
  </tr>';
  
   echo '<tr>
    <td colspan="4"><div align="center">
      <br>
      <p><b><u>SURAT KETERANGAN KELULUSAN</u></b>
      <br>Nomor : Mts.11.12.702/PP.01.1/05/2018</p>
    </div></td>
  </tr>';
  
  echo '<tr>
    <td colspan="4"><div align="justify">
      <br>
      <p>Yang bertanda tangan di bawah ini Kepala MTs Al MA"ARIF II TIRTOMOYO Menerangkan Bahwa :</p>
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
    <td colspan="2">: '.$r['name'].' </td>
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
      <p>Telah mengikuti Ujian Nasional, Ujian Tulis Sekolah dan Ujian Praktik Sekolah pada <br>Tahun Pelajaran 2017/2018 di MTs AL MA"ARIF II TIRTOMOYO dinyatakan:</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>';
  
    echo '<tr>
    <td></td>
    <td></td>
    <td><div align="center"><img src="images/'.$r['ketgambar'].'.jpg" width="200" height="50"/></div></td>
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
    <td width="321"><p>Wonogiri, 23 Mei 2018  <br />
      Kepala Madrasah,</p>
      <p><img src="images/logo-MTs.gif" width="107" height="107" />  <br />
        HISYAM, S.E.<br>
    NIP. -</p></td>
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