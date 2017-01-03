<h1>Edit Parameter</h1>
	<?php foreach ($data_edit as $de) {
		?>
		<form method="post" action="<?php echo base_url().'index.php/cParameter/update_act' ?>">
			<div class="form-group">
			    <label for="id_cluster">id cluster</label>
			    <input type="text" class="form-control" id="id_cluster" placeholder="id_cluster" name="id_cluster" readonly="readonly" value="<?php echo $de->id_cluster ?>">
			</div>
			<div class="form-group">
			    <label for="no_pendaftaran">no_pendaftaran</label>
			    <input type="text" class="form-control" id="no_pendaftaran" placeholder="no_pendaftaran" name="no_pendaftaran" readonly="readonly" value="<?php echo $de->no_pendaftaran ?>">
			</div>
			<div class="form-group">
			    <label for="nama_calon_mahasiswa">nama_calon_mahasiswa</label>
			    <input type="text" class="form-control" id="nama_calon_mahasiswa" placeholder="nama_calon_mahasiswa" name="nama_calon_mahasiswa" readonly="readonly" value="<?php echo $de->nama_calon_mahasiswa ?>">
			</div>
			<div class="form-group">
			  <div class="input-group">
	            <span class="input-group-addon" for="nil_raport">Nilai Raport Calon Mahasiswa</span>
	            <select class="form-control"  name="nil_raport">
	              <option value="80" <?php if ($de->nil_raport == "80") { echo 'selected'; } ?>>100</option>
				  <option value="70" <?php if ($de->nil_raport == "70") { echo 'selected'; } ?>>&lt;=90</option>
	              <option value="60" <?php if ($de->nil_raport == "60") { echo 'selected'; } ?>>&lt;=80</option>
	              <option value="50" <?php if ($de->nil_raport == "50") { echo 'selected'; } ?>>&lt;=70</option>
	              <option value="40" <?php if ($de->nil_raport == "40") { echo 'selected'; } ?>>&lt;60</option>
	              <option value="30" <?php if ($de->nil_raport == "30") { echo 'selected'; } ?>>&lt;50</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="tes_tulis">Nilai Tes Tulis Calon Mahasiswa</span>
	            <select class="form-control"  name="tes_tulis">
	              <option value="80" <?php if ($de->tes_tulis == "80") { echo 'selected'; } ?>>100</option>
	              <option value="70" <?php if ($de->tes_tulis == "70") { echo 'selected'; } ?>>&lt;=90</option>
	              <option value="60" <?php if ($de->tes_tulis == "60") { echo 'selected'; } ?>>&lt;=80</option>
	              <option value="50" <?php if ($de->tes_tulis == "50") { echo 'selected'; } ?>>&lt;=70</option>
	              <option value="40" <?php if ($de->tes_tulis == "40") { echo 'selected'; } ?>>&lt;60</option>
	              <option value="30" <?php if ($de->tes_tulis == "30") { echo 'selected'; } ?>>&lt;50</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="kepribadian_wawancara">kriteria kepribadian atau wawancara</span>
	            <select class="form-control"  name="kepribadian_wawancara">
	              <option value="80" <?php if ($de->kepribadian_wawancara == "80") { echo 'selected'; } ?>>Sangat Baik</option>
	              <option value="70" <?php if ($de->kepribadian_wawancara == "70") { echo 'selected'; } ?>>Baik</option>
	              <option value="60" <?php if ($de->kepribadian_wawancara == "60") { echo 'selected'; } ?>>Sedang</option>
	              <option value="50" <?php if ($de->kepribadian_wawancara == "50") { echo 'selected'; } ?>>Cukup</option>
	              <option value="40" <?php if ($de->kepribadian_wawancara == "40") { echo 'selected'; } ?>>Kurang</option>
	              <option value="30" <?php if ($de->kepribadian_wawancara == "30") { echo 'selected'; } ?>>Sangat Kurang</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="keaktifan">kriteria keaktifan</span>
	            <select class="form-control"  name="keaktifan">
	              <option value="80" <?php if ($de->keaktifan == "80") { echo 'selected'; } ?>>Sangat AKtif</option>
	              <option value="70" <?php if ($de->keaktifan == "70") { echo 'selected'; } ?>>aktif</option>
	              <option value="60" <?php if ($de->keaktifan == "60") { echo 'selected'; } ?>>Sedang</option>
	              <option value="50" <?php if ($de->keaktifan == "50") { echo 'selected'; } ?>>Cukup</option>
	              <option value="40" <?php if ($de->keaktifan == "40") { echo 'selected'; } ?>>Kurang</option>
	              <option value="30" <?php if ($de->keaktifan == "30") { echo 'selected'; } ?>>Sangat Kurang</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="pekerjaan_orang_tua">kriteria pekerjaan orang tua</span>
	            <select class="form-control"  name="pekerjaan_orang_tua">
	              <option value="80" <?php if ($de->pekerjaan_orang_tua == "80") { echo 'selected'; } ?>>PNS</option>
	              <option value="70" <?php if ($de->pekerjaan_orang_tua == "70") { echo 'selected'; } ?>>Swasta</option>
	              <option value="60" <?php if ($de->pekerjaan_orang_tua == "60") { echo 'selected'; } ?>>Petani</option>
	              <option value="50" <?php if ($de->pekerjaan_orang_tua == "50") { echo 'selected'; } ?>>Buruh</option>
	              <option value="40" <?php if ($de->pekerjaan_orang_tua == "40") { echo 'selected'; } ?>>Kuli</option>
	              <option value="30" <?php if ($de->pekerjaan_orang_tua == "30") { echo 'selected'; } ?>>Tidak Bekerja</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="biaya_hidup_calon_mahasiswa">kriteria biaya hidup calon mahasiswa</span>
	            <select class="form-control"  name="biaya_hidup_calon_mahasiswa">
	              <option value="80" <?php if ($de->biaya_hidup_calon_mahasiswa == "80") { echo 'selected'; } ?>>mandiri</option>
	              <option value="70" <?php if ($de->biaya_hidup_calon_mahasiswa == "70") { echo 'selected'; } ?>>sebagian orang tua</option>
	              <option value="60" <?php if ($de->biaya_hidup_calon_mahasiswa == "60") { echo 'selected'; } ?>>orang tua</option>
	              <option value="50" <?php if ($de->biaya_hidup_calon_mahasiswa == "50") { echo 'selected'; } ?>>sebagian hutang</option>
	              <option value="40" <?php if ($de->biaya_hidup_calon_mahasiswa == "40") { echo 'selected'; } ?>>bergantung pada orang lain</option>
	              <option value="30" <?php if ($de->biaya_hidup_calon_mahasiswa == "30") { echo 'selected'; } ?>>budaya boros tidak berpenghasilan</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="pekerjaan">kriteria pekerjaan</span>
	            <select class="form-control"  name="pekerjaan">
	              <option value="80" <?php if ($de->pekerjaan == "80") { echo 'selected'; } ?>>mempunyai usaha pribadi</option>
	              <option value="70" <?php if ($de->pekerjaan == "70") { echo 'selected'; } ?>>kerja di perusahaan</option>
	              <option value="60" <?php if ($de->pekerjaan == "60") { echo 'selected'; } ?>>kerja sampingan</option>
	              <option value="50" <?php if ($de->pekerjaan == "50") { echo 'selected'; } ?>>kadang bekerja full time</option>
	              <option value="40" <?php if ($de->pekerjaan == "40") { echo 'selected'; } ?>>kadang tidak bekerja part time</option>
	              <option value="30" <?php if ($de->pekerjaan == "30") { echo 'selected'; } ?>>tidak bekerja</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="prestasi_semasa_calon_mahasiswa">kriteria prestasi semasa calon mahasiswa</span>
	            <select class="form-control"  name="prestasi_semasa_calon_mahasiswa">
	              <option value="80" <?php if ($de->prestasi_semasa_calon_mahasiswa == "80") { echo 'selected'; } ?>>Sangat Baik</option>
	              <option value="70" <?php if ($de->prestasi_semasa_calon_mahasiswa == "70") { echo 'selected'; } ?>>Baik</option>
	              <option value="60" <?php if ($de->prestasi_semasa_calon_mahasiswa == "60") { echo 'selected'; } ?>>Sedang</option>
	              <option value="50" <?php if ($de->prestasi_semasa_calon_mahasiswa == "50") { echo 'selected'; } ?>>Cukup</option>
	              <option value="40" <?php if ($de->prestasi_semasa_calon_mahasiswa == "40") { echo 'selected'; } ?>>Kurang</option>
	              <option value="30" <?php if ($de->prestasi_semasa_calon_mahasiswa == "30") { echo 'selected'; } ?>>Sangat Kurang</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="beasiswa">kriteria beasiswa</span>
	            <select class="form-control"  name="beasiswa">
	              <option value="80" <?php if ($de->beasiswa == "80") { echo 'selected'; } ?>>selalu mendapatkan</option>
	              <option value="70" <?php if ($de->beasiswa == "70") { echo 'selected'; } ?>>kadang mendapatkan beasiswa</option>
	              <option value="60" <?php if ($de->beasiswa == "60") { echo 'selected'; } ?>>ikut program beasiswa tapi tidak pernah lolos</option>
	              <option value="50" <?php if ($de->beasiswa == "50") { echo 'selected'; } ?>>tidak pernah direkomendasi</option>
	              <option value="40" <?php if ($de->beasiswa == "40") { echo 'selected'; } ?>>tertarik pernah ikut</option>
	              <option value="30" <?php if ($de->beasiswa == "30") { echo 'selected'; } ?>>tidak tertarik</option>
	            </select>
	          </div>
	          <br />
	          <div class="input-group">
	            <span class="input-group-addon" for="ekstrakulikuler">ekstrakulikuler</span>
	            <select class="form-control"  name="ekstrakulikuler">
	              <option value="80" <?php if ($de->ekstrakulikuler == "80") { echo 'selected'; } ?>>Sangat Baik</option>
	              <option value="70" <?php if ($de->ekstrakulikuler == "70") { echo 'selected'; } ?>>Baik</option>
	              <option value="60" <?php if ($de->ekstrakulikuler == "60") { echo 'selected'; } ?>>Sedang</option>
	              <option value="50" <?php if ($de->ekstrakulikuler == "50") { echo 'selected'; } ?>>Cukup</option>
	              <option value="40" <?php if ($de->ekstrakulikuler == "40") { echo 'selected'; } ?>>Kurang</option>
	              <option value="30" <?php if ($de->ekstrakulikuler == "30") { echo 'selected'; } ?>>Sangat Kurang</option>
	            </select>
	          </div>
	        </div>
		<input type="submit" value="Update" class="btn btn-primary"></td>
		</form>
		<?php
	}
	?>
