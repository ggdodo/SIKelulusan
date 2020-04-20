<div id="rightPan">
    <h2>Edit Data Pengguna / User</h2>
    <div class="cleaner_h5"></div>
    <fieldset>
        <legend>Edit Data Pengguna / User Pendaftaran Online</legend>
        <form method="post" action="index.php?page=updateuser">
            <table>
                <?php
                include('../koneksi.php');
                $q = $mysqli->query("select * from tb_student where noujian='$_GET[id_user]'");
                while ($r = $q->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <input type="hidden" name="id" value="<?php echo $r['noujian']; ?>" />
                    <input type="hidden" name="tipe" value="siswa" />
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: <input type="text" name="nama" size="45" value="<?php echo $r['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: <input type="text" name="tgllhr" size="45" value="<?php echo $r['tgllhr']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <input type="text" name="address" size="45" value="<?php echo $r['addresse']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:
                            <?php $jur_count = 1; ?>
                            <select name="jurusan">
                                <?php while ($row = $jurusan->fetch_array(MYSQLI_ASSOC)) : ?>
                                    <?php if ($jur_count == $r['sekolah']) { ?>
                                        <option value="<?php echo $row['kode']; ?>" selected><?php echo $row['jurusan']; ?></option>
                                    <?php } else { ?>
                                        <option value="<?php echo $row['kode']; ?>"><?php echo $row['jurusan']; ?></option>
                                <?php }
                                    $jur_count++;
                                endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="edit_siswa" value="Simpan Data" class="btn btn-primary" /></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </fieldset>
</div>