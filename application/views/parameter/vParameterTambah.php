<h1>Masukkan Parameter</h1>
	<form method="post" action="<?php echo base_url().'index.php/cParameter/tambah_act' ?>">
		<div class="form-group">
		    <label for="id_cluster">calon mahasiswa</label>
			<select name="no_pendaftaran" multiple class="form-control">
			  <?php foreach($rs_calon_mahasiswa as $calon_mahasiswa) { ?>
                <option value="<?php echo $calon_mahasiswa->no_pendaftaran;?>" <?php echo set_select('calon_mahasiswa',$calon_mahasiswa->nama_calon_mahasiswa);?> />
                <?php echo $calon_mahasiswa->nama_calon_mahasiswa;?>	 :: <?php echo $calon_mahasiswa->no_pendaftaran;?>      
              <?php } ?>
			</select>
		</div>
		<div class="form-group">
		  <div class="input-group">
            <span class="input-group-addon" for="nil_raport">Nilai Raport Calon Mahasiswa</span>
            <select class="form-control"  name="nil_raport">
              <option value="80">100</option>
              <option value="70">&lt;=90</option>
              <option value="60">&lt;=80</option>
              <option value="50">&lt;=70</option>
              <option value="40">&lt;60</option>
              <option value="30">&lt;50</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="tes_tulis">Nilai Tes Tulis Calon Mahasiswa</span>
            <select class="form-control"  name="tes_tulis">
              <option value="80">100</option>
              <option value="70">&lt;=90</option>
              <option value="60">&lt;=80</option>
              <option value="50">&lt;=70</option>
              <option value="40">&lt;60</option>
              <option value="30">&lt;50</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="kepribadian_wawancara">kriteria kepribadian atau wawancara</span>
            <select class="form-control"  name="kepribadian_wawancara">
              <option value="80">Sangat Baik</option>
              <option value="70">Baik</option>
              <option value="60">Sedang</option>
              <option value="50">Cukup</option>
              <option value="40">Kurang</option>
              <option value="30">Sangat Kurang</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="keaktifan">kriteria keaktifan</span>
            <select class="form-control"  name="keaktifan">
              <option value="80">Sangat AKtif</option>
              <option value="70">aktif</option>
              <option value="60">Sedang</option>
              <option value="50">Cukup</option>
              <option value="40">Kurang</option>
              <option value="30">Sangat Kurang</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="pekerjaan_orang_tua">kriteria pekerjaan orang tua</span>
            <select class="form-control"  name="pekerjaan_orang_tua">
              <option value="80">PNS</option>
              <option value="70">Swasta</option>
              <option value="60">Petani</option>
              <option value="50">Buruh</option>
              <option value="40">Kuli</option>
              <option value="30">Tidak Bekerja</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="biaya_hidup_calon_mahasiswa">kriteria biaya hidup calon mahasiswa</span>
            <select class="form-control"  name="biaya_hidup_calon_mahasiswa">
              <option value="80">mandiri</option>
              <option value="70">sebagian orang tua</option>
              <option value="60">orang tua</option>
              <option value="50">sebagian hutang</option>
              <option value="40">bergantung pada orang lain</option>
              <option value="30">budaya boros tidak berpenghasilan</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="pekerjaan">kriteria pekerjaan</span>
            <select class="form-control"  name="pekerjaan">
              <option value="80">mempunyai usaha pribadi</option>
              <option value="70">kerja di perusahaan</option>
              <option value="60">kerja sampingan</option>
              <option value="50">kadang bekerja full time</option>
              <option value="40">kadang tidak bekerja part time</option>
              <option value="30">tidak bekerja</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="prestasi_semasa_calon_mahasiswa">kriteria prestasi semasa calon mahasiswa</span>
            <select class="form-control"  name="prestasi_semasa_calon_mahasiswa">
              <option value="80">Sangat Baik</option>
              <option value="70">Baik</option>
              <option value="60">Sedang</option>
              <option value="50">Cukup</option>
              <option value="40">Kurang</option>
              <option value="30">Sangat Kurang</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="beasiswa">kriteria beasiswa</span>
            <select class="form-control"  name="beasiswa">
              <option value="80">selalu mendapatkan</option>
              <option value="70">kadang mendapatkan beasiswa</option>
              <option value="60">ikut program beasiswa tapi tidak pernah lolos</option>
              <option value="50">tidak pernah direkomendasi</option>
              <option value="40">tertarik pernah ikut</option>
              <option value="30">tidak tertarik</option>
            </select>
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon" for="ekstrakulikuler">ekstrakulikuler</span>
            <select class="form-control"  name="ekstrakulikuler">
              <option value="80">Sangat Baik</option>
              <option value="70">Baik</option>
              <option value="60">Sedang</option>
              <option value="50">Cukup</option>
              <option value="40">Kurang</option>
              <option value="30">Sangat Kurang</option>
            </select>
          </div>
        </div>
        <input type="submit" value="input" class="btn btn-primary" >
	</form>
