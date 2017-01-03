	<h1>Edit Bobot Kriteria</h1>
	<?php foreach ($data_edit as $dcm) {
		?>
		
	<form method="post" action="<?php echo base_url().'index.php/cKriteria/update_act' ?>">
		<input type="hidden" name="keterangan" value="<?php echo $dcm->keterangan ?>">
		<div class="form-group">
		    <label for="keterangan">keterangan</label>
		    <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan" readonly="readonly" value="<?php echo $dcm->keterangan ?>">
		</div>
		
		
		<div class="form-group">
			  <div class="input-group">
	            <span class="input-group-addon" for="nil_raport">Nilai Raport Calon Mahasiswa</span>
	            <input type="text" class="form-control" id="nil_raport" placeholder="nil_raport" name="nil_raport" value="<?php echo $dcm->nil_raport ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="tes_tulis">Nilai Tes Tulis Calon Mahasiswa</span>
	            <input type="text" class="form-control" id="tes_tulis" placeholder="tes_tulis" name="tes_tulis" value="<?php echo $dcm->tes_tulis ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="kepribadian_wawancara">kepribadian wawancara</span>
	            <input type="text" class="form-control" id="kepribadian_wawancara" placeholder="kepribadian_wawancara" name="kepribadian_wawancara" value="<?php echo $dcm->kepribadian_wawancara ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="keaktifan">kriteria keaktifan</span>
	            <input type="text" class="form-control" id="keaktifan" placeholder="keaktifan" name="keaktifan" value="<?php echo $dcm->keaktifan ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="pekerjaan_orang_tua">kriteria pekerjaan orang tua</span>
	            <input type="text" class="form-control" id="pekerjaan_orang_tua" placeholder="pekerjaan_orang_tua" name="pekerjaan_orang_tua" value="<?php echo $dcm->pekerjaan_orang_tua ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="biaya_hidup_calon_mahasiswa">kriteria biaya hidup calon mahasiswa</span>
	            <input type="text" class="form-control" id="biaya_hidup_calon_mahasiswa" placeholder="biaya_hidup_calon_mahasiswa" name="biaya_hidup_calon_mahasiswa" value="<?php echo $dcm->biaya_hidup_calon_mahasiswa ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="pekerjaan">kriteria pekerjaan</span>
	            <input type="text" class="form-control" id="pekerjaan" placeholder="pekerjaan" name="pekerjaan" value="<?php echo $dcm->pekerjaan ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="prestasi_semasa_calon_mahasiswa">kriteria prestasi semasa calon mahasiswa</span>
	            <input type="text" class="form-control" id="prestasi_semasa_calon_mahasiswa" placeholder="prestasi_semasa_calon_mahasiswa" name="prestasi_semasa_calon_mahasiswa" value="<?php echo $dcm->prestasi_semasa_calon_mahasiswa ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="beasiswa">kriteria beasiswa</span>
	            <input type="text" class="form-control" id="beasiswa" placeholder="beasiswa" name="beasiswa" value="<?php echo $dcm->beasiswa ?>">
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="ekstrakulikuler">ekstrakulikuler</span>
	            <input type="text" class="form-control" id="ekstrakulikuler" placeholder="ekstrakulikuler" name="ekstrakulikuler" value="<?php echo $dcm->ekstrakulikuler ?>">
	          </div>
	        </div>	


		<input type="submit" value="Update" class="btn btn-primary">
	</form>
	<?php
		}
	?>
