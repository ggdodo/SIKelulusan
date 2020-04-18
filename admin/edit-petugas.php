<div id="rightPan">
	<h2>Edit Data Pengguna / User</h2>
	<div class="cleaner_h5"></div>
	<fieldset>
		<legend>Edit Data Pengguna / User Pendaftaran Online</legend>
		<form method="post" action="index.php?page=updateuser">
			<table>
				<?php
				include('../koneksi.php');
				$q = $mysqli->query("select * from tbl_user where id_user='$_GET[id_user]'");
				while ($r = $q->fetch_array(MYSQLI_ASSOC)) {
				?>
					<input type="hidden" name="id" value="<?php echo $r['id_user']; ?>" />
					<input type="hidden" name="tipe" value="user" />
					<tr>
						<td>Nama Lengkap</td>
						<td>: <input type="text" name="nama" size="45" value="<?php echo $r['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>: <input type="text" name="username" size="45" value="<?php echo $r['username']; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>: <input type="text" name="pass" size="45"> * Kosongkan Jika Tidak Diubah</td>
					</tr>
					<tr>
						<td>Level</td>
						<td>: <input type="text" name="level_user" size="45"> * Kosongkan Jika Tidak Diubah</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="edit_user" value="Simpan Data" class="btn btn-primary" /></td>
					</tr>
				<?php
				}
				?>
			</table>
		</form>
	</fieldset>
</div>