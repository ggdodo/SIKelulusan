<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Cetak Semua SK</title>
  <style>
    @media print {

      .no-print,
      .no-print * {
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
  <div align="right"><button class="no-print" onclick="window.print();">Cetak Semua</button></div>
  <?php
  include('config.php');
  $q = $mysqli->query("SELECT * FROM tb_student");
  while ($r = $q->fetch_array(MYSQLI_ASSOC)) {
    echo '<table width="800" align="center">';
    echo '<tr>
    <td><img src="images/logo-Smk.png" width="107" height="107" /> <hr></td>
    <td colspan="3"><div align="center">
      <h3>LEMBAGA PENDIDIKAN ISLAM AL HUDA KOTA KEDIRI<br></h3>
      <h2>SMK AL HUDA KOTA KEDIRI<br></h2>
        Alamat : Jl. Masjid Al Huda 196, Kota Kediri Kode Pos:64452<br> Website : www.smkalhudakdr.sch.id - e-mail : smkalhuda_kdr@yahoo.com</h3>
    </div><hr></td>
  </tr>';

    echo '<tr>
    <td colspan="4"><div align="center">
      <br>
      <p><b><u>SURAT KETERANGAN KELULUSAN</u></b>
      <br>Nomor : Smk.11.12.702/PP.01.1/05/2020</p>
    </div></td>
  </tr>';

    echo '<tr>
    <td colspan="4"><div align="justify">
      <br>
      <p>Yang bertanda tangan di bawah ini Kepala SMK AL HUDA KOTA KEDIRI Menerangkan Bahwa :</p>
      <p><br />
      </p>
    </div></td>
  </tr>';
    echo '<tr>
    <td width="107">&nbsp;</td>
    <td width="129">No Ujian</td>
    <td colspan="2">: ' . $r['noujian'] . ' </td>
  </tr>';
    echo '<tr>
    <td>&nbsp;</td>
    <td>Nama</td>
    <td colspan="2">: ' . $r['nama'] . ' </td>
  </tr>';
    echo '<tr>
    <td>&nbsp;</td>
    <td>Tanggal Lahir</td>
    <td colspan="2">: ' . $r['tgllhr'] . ' </td>
  </tr>';
    $kode_jur = $r["jurusan"];
    $ket_jur = $mysqli->query("select * from tbl_jurusan where kode ='$kode_jur' ");
    $ket_jurusan = $ket_jur->fetch_array(MYSQLI_ASSOC);
    echo '<tr>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td colspan="2">: XII ' . $ket_jurusan["jurusan"] . ' </td>
  </tr>';

    echo '<tr>
    <td colspan="4"><div align="justify">
      <p>&nbsp;</p>
      <p>Telah mengikuti Ujian Nasional, Ujian Tulis Sekolah dan Ujian Praktik Sekolah pada <br>Tahun Pelajaran 2019/2020 di SMK AL HUDA KOTA KEDIRI dinyatakan:</p>
    </div></td>
  </tr>';

    echo '<tr>
    <td></td>
    <td></td>
    <td><div align="center"><img src="images/' . $r['ketgambar'] . '.jpg" width="200" height="50"/></div></td>
  </tr>';

    echo '<tr>
    <p>&nbsp;</p>
    <td colspan="4"><div align="justify">
      <p>Dengan nilai sebagai berikut :</p>
    <td></td>
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
        <td>' . $r['indo'] . '</td>
        <td>' . $r['nsindo'] . '</td>
        <td>' . $r['naindo'] . '</td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td>' . $r['mat'] . '</td>
        <td>' . $r['nsmat'] . '</td>
        <td>' . $r['namat'] . '</td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td>' . $r['inggris'] . '</td>
        <td>' . $r['nsinggris'] . '</td>
        <td>' . $r['nainggris'] . '</td>
      </tr>
        <td>Teori Kejuruan</td>
        <td>' . $r['kejuruan'] . '</td>
        <td>' . $r['nskejuruan'] . '</td>
        <td>' . $r['nakejuruan'] . '</td>
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
    <td width="321"><p>Kediri, 5 Mei 2020  <br />
      Kepala SMK,</p>
      <p><img src="images/ttd.jpg" width="100" height="100" />  <br />
        SAYA SENDIRI<br>
    NIP. -</p></td>
  </tr>';
    echo '<tr>
    <td colspan="4"><p>&nbsp;</p>
    <p>Catatan :  <br />- Bagi siswa yang belum menyelesaikan administrasi harap segera diselesaikan.<br />  - Untuk siswa yang mendapatkan keterangan PANGGILAN. Silakan datang kesekolah  hubungi panitia.</p></td>
  </tr>';
    echo '</table>
  <br>
  <br>';
    echo '<p style="page-break-after:always;"></p>';
  }
  ?>
</body>

</html>