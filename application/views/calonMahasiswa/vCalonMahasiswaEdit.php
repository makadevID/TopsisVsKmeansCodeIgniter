	<h1>Edit Pegawai</h1>
	<?php foreach ($data_edit as $dcm) {
		?>
		
	<form method="post" action="<?php echo base_url().'index.php/cCalonMahasiswa/update_act' ?>">
		<input type="hidden" name="sal" value="<?php echo $dcm->no_pendaftaran ?>">
		<div class="form-group">
		    <label for="nama_calon_mahasiswa">Nama Calon Mahasiswa</label>
		    <input type="text" class="form-control" id="nama_calon_mahasiswa" placeholder="masukkan nama calon mahasiswa" name="nama_calon_mahasiswa" value="<?php echo $dcm->nama_calon_mahasiswa ?>">
		</div>
		<div class="form-group">
		    <label for="jenis_kelamin_calon_mahasiswa">jenis_kelamin_calon_mahasiswa</label>
			<select name="jenis_kelamin_calon_mahasiswa" multiple class="form-control">
			  <option value="1" 
						  <?php 
						  	if ($dcm->jenis_kelamin_calon_mahasiswa == "1") {
						  		echo 'selected';
						  	}	
						  ?>>
						  	laki-laki</option>
						  <option value="0"
						  <?php 
						  	if ($dcm->jenis_kelamin_calon_mahasiswa == "0") {
						  		echo 'selected';
						  	}	
						  ?>>
						  perempuan</option>
						  
			</select>
		</div>
		<div class="form-group">
		    <label for="alamat_calon_mahasiswa">alamat_calon_mahasiswa</label>
		    <input type="text" class="form-control" id="alamat_calon_mahasiswa" placeholder="alamat_calon_mahasiswa" name="alamat_calon_mahasiswa" value="<?php echo $dcm->alamat_calon_mahasiswa ?>">
		</div>
		<div class="form-group">
		    <label for="no_telepon_calon_mahasiswa">no_telepon_calon_mahasiswa</label>
		    <input type="text" class="form-control" id="no_telepon_calon_mahasiswa" placeholder="masukkan no telepon calon mahasiswa" name="no_telepon_calon_mahasiswa" value="<?php echo $dcm->no_telepon_calon_mahasiswa ?>">
		</div>
		<input type="submit" value="Update" class="btn btn-primary">
	</form>
	<?php
		}
	?>
