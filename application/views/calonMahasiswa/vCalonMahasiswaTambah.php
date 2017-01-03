<h1>Tambah Calon Mahasiswa</h1>
	<form method="post" action="<?php echo base_url().'index.php/cCalonMahasiswa/tambah_act' ?>">
		<div class="form-group">
		    <label for="no_pendaftaran">No Pendaftaran</label>
		    <input type="text" class="form-control" id="no_pendaftaran" placeholder="masukkan no pendaftaran" name="no_pendaftaran">
		</div>
		<div class="form-group">
		    <label for="nama_calon_mahasiswa">Nama Calon Mahasiswa</label>
		    <input type="text" class="form-control" id="nama_calon_mahasiswa" placeholder="masukkan nama" name="nama_calon_mahasiswa">
		</div>
		<div class="form-group">
		    <label for="jenis_kelamin">Jenis Kelamin Calon Mahasiswa</label>
			<select name="jenis_kelamin_calon_mahasiswa" multiple class="form-control">
			  <option value="1">Laki-laki</option>
			  <option value="0">Perempuan</option>
			</select>
		</div>
		<div class="form-group">
		    <label for="alamat_calon_mahasiswa">Alamat Calon Mahasiswa</label>
		    <input type="text" class="form-control" id="alamat_calon_mahasiswa" placeholder="masukkan alamat" name="alamat_calon_mahasiswa">
		</div>
		<div class="form-group">
		    <label for="no_telepon_calon_mahasiswa">No Telepon Calon Mahasiswa</label>
		    <input type="text" class="form-control" id="no_telepon_calon_mahasiswa" placeholder="masukkan no telepon" name="no_telepon_calon_mahasiswa">
		</div>
		
		<input type="submit" value="input" class="btn btn-primary">
	</form>


