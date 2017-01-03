<!DOCTYPE html>
<html>
<head>
	<title>Sengkaling Food Festival</title>
</head>
<body>
<h1>Tambah Pengguna</h1>
	<form method="post" action="<?php echo base_url().'index.php/cPengguna/tambah_act' ?>">
		<div class="form-group">
		    <label for="username">username / no_pendaftaran</label>
		    <input type="text" class="form-control" id="username" placeholder="username" name="username">
		</div>
		<div class="form-group">
		    <label for="password">password</label>
		    <input type="password" class="form-control" id="password" placeholder="password" name="password">
		</div>
		<div class="form-group">
		    <label for="hakakses">hak akses</label>
			<select name="hakakses" multiple class="form-control">
			  <option value="1">admin</option>
			  <option value="0">calon mahasiswa</option>
			</select>
		</div>
		<input type="submit" value="input" class="btn btn-primary" ></td>
	</form>
</body>
</html>