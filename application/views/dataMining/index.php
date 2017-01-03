<div class="widget-content">     
<div class="table-responsive">       
	<table id="example" class="table table-striped table-bordered"><h1>Data Calon Mahasiswa</h1>
		<thead>
			<tr>	
				<th>no</th>
				<th>no pendaftaran</th>
				<th>nama calon pendaftar mahasiswa</th>
				<th>nil raport</th>
				<th>tes tulis</th>
				<th>kepribadian wawancara</th>
				<th>keaktifan</th>
				<th>pekerjaan orang tua</th>
				<th>biaya hidup calon mahasiswa</th>
				<th>pekerjaan</th>
				<th>prestasi semasa calon mahasiswa</th>
				<th>beasiswa</th>
				<th>ekstrakulikuler</th>
				<th>DC1</th>
				<th>DC2</th>
				<th>Kelompok</th>
				<th>Kelompok</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=1;
				foreach($data_k_means as $dp){
			 ?>
			<tr>			
				<td><?php echo $i; ?></td>
				<td><?php echo $dp->no_pendaftaran; ?></td>
				<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
				<td><?php echo $dp->nil_raport; ?></td>
				<td><?php echo $dp->tes_tulis; ?></td>
				<td><?php echo $dp->kepribadian_wawancara; ?></td>
				<td><?php echo $dp->keaktifan; ?></td>
				<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
				<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
				<td><?php echo $dp->pekerjaan; ?></td>
				<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
				<td><?php echo $dp->beasiswa; ?></td>
				<td><?php echo $dp->ekstrakulikuler; ?></td>
				<td><?php echo $dp->dc1; ?></td>
				<td><?php echo $dp->dc2; ?></td>
				<td><?php echo $dp->kelompok; ?></td>
				<td><?php 

				if (($dp->kelompok)==="2") {
					echo "tidak berprestasi";				
				} else if (($dp->kelompok)==="1") {
					echo "berprestasi";
				}

			 ?></td>
			</tr>
			<?php 
			$i++;
			}
			?>
		</tbody>
	</table>
</div>
</div>

<br /><br /><br /><br />

<div class="widget-content">    
<div class="table-responsive">         
<table id="example1" class="table table-striped table-bordered">

<h1>Data Mining dengan TOPSIS</h1>
<h3> Perangkingan </h3>
		<thead>
			<tr>	
				<th>no</th>
				<th>no pendaftaran</th>
				<th>nama calon pendaftar mahasiswa</th>
				<th>nilai</th>
				<th>ranking</th>
				<th>kelompok</th>
			
			
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=1;
				foreach($data_ranking as $dp){
		 ?>
		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->nilai; ?></td>
			<td><?php echo $dp->ranking; ?></td>
			<td><?php 

				if (($dp->nilai)<='0.5') {
					echo "tidak berprestasi";				
				} else if (($dp->nilai)>='0.5') {
					echo "berprestasi";
				}

			 ?></td>
			
		</tr>
		<?php 
			$i++;
		}
		?>
		</tbody>
</table>
</div>
</div>

<br /><br /><br /><br />


<div class="widget-content">   
<div class="table-responsive">          
<table class="table table-striped table-bordered">
<h3> kriteria</h3>
<thead>
		<tr>			
			<th>keterangan</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
			
			
		</tr>
		</thead>
		<?php foreach($data_kriteria as $dp){
		 ?>
		<tr>			
			<td><?php echo $dp->keterangan; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
			
			
		</tr>
		<?php 
		}
		?>
</table>
</div>
</div>

<br /><br /><br /><br />


<div class="widget-content">   
<div class="table-responsive">          
<table id="example3" class="table table-striped table-bordered">
<h3> nilai kuadrat</h3>
<thead>
		<tr>			
			<th>no</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
			
			
		</tr>
		</thead>
		<?php 
			$i=1;
			foreach($data_kuadrat as $dp){
		 ?>
		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
			
			
		</tr>
		<?php 
		$i++;
		}
		?>
</table>
</div>
</div>

<br /><br /><br /><br />


<div class="widget-content"> 
<div class="table-responsive">            
<table class="table table-striped table-bordered">
<h3> kuadrat dan akar kuadrat</h3>
<thead>
		<tr>			
			<th>jenis nilai</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
		</tr>
		</thead>
		<?php foreach($data_akar_kuadrat as $dp){
		 ?>
		<tr>			
			<td><?php echo $dp->jenis_nilai; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
		</tr>
		<?php 
		}
		?>
</table>
</div>
</div>

<br /><br /><br /><br />

<div class="widget-content">  
<div class="table-responsive">           
<table id="example5" class="table table-striped table-bordered">
<h3> Normalisasi Matrik Keputusan</h3>
<thead>
		<tr>			
			<th>no</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
			
			
		</tr>
		</thead>
		<?php 
		$i=1;
		foreach($data_normalisasi_matriks as $dp){
		 ?>
		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
			
			
		</tr>
		<?php
		$i++; 
		}
		?>
</table>
</div>
</div>


<br /><br /><br /><br />

<div class="widget-content"> 
<div class="table-responsive">            
<table id="example6" class="table table-striped table-bordered">
<h3> Weighted Normalized Decision Matrix </h3>
<thead>
		<tr>			
			<th>no</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
			
			
		</tr>
		</thead>
		<?php 
		$i=1;
		foreach($data_weighted_normalized_decision_matrix as $dp){
		 ?>

		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
			
			
		</tr>
		<?php 
		$i++;
		}
		?>
</table>
</div>
</div>

<br /><br /><br /><br />


<div class="widget-content">    
<div class="table-responsive">         
<table class="table table-striped table-bordered">
<h3> Solusi Ideal Positif Negatif</h3>
<thead>
		<tr>			
			<th>jenis nilai</th>
			<th>nil raport</th>
			<th>tes tulis</th>
			<th>kepribadian wawancara</th>
			<th>keaktifan</th>
			<th>pekerjaan orang tua</th>
			<th>biaya hidup calon mahasiswa</th>
			<th>pekerjaan</th>
			<th>prestasi semasa calon mahasiswa</th>
			<th>beasiswa</th>
			<th>ekstrakulikuler</th>
		</tr>
		</thead>
		<?php foreach($data_positif_negatif_lihat as $dp){
		 ?>
		<tr>			
			<td><?php echo $dp->jenis_nilai; ?></td>
			<td><?php echo $dp->nil_raport; ?></td>
			<td><?php echo $dp->tes_tulis; ?></td>
			<td><?php echo $dp->kepribadian_wawancara; ?></td>
			<td><?php echo $dp->keaktifan; ?></td>
			<td><?php echo $dp->pekerjaan_orang_tua; ?></td>
			<td><?php echo $dp->biaya_hidup_calon_mahasiswa; ?></td>
			<td><?php echo $dp->pekerjaan; ?></td>
			<td><?php echo $dp->prestasi_semasa_calon_mahasiswa; ?></td>
			<td><?php echo $dp->beasiswa; ?></td>
			<td><?php echo $dp->ekstrakulikuler; ?></td>
		</tr>
		<?php 
		}
		?>
</table>
</div>
</div>

<br /><br /><br /><br />

<div class="widget-content">          
<div class="table-responsive">   
<table id="example8" class="table table-striped table-bordered">
<h3> Separasi </h3>
<thead>
		<tr>			
			<th>no</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>ideal positif</th>
			<th>ideal negatif</th>
			
			
		</tr>
		</thead>
		<?php 
		$i=1;
		foreach($data_separasi as $dp){
		 ?>
		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->ideal_positif; ?></td>
			<td><?php echo $dp->ideal_negatif; ?></td>
			
		</tr>
		<?php 
		$i++;
		}
		?>
</table>
</div>
</div>
<br /><br /><br /><br />

<div class="widget-content">        
<div class="table-responsive">     
<table id="example9" class="table table-striped table-bordered">
<h3> kedekatan relatif </h3>
<thead>
		<tr>			
			<th>no</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>dekat_relatif</th>
			
		</tr>
		<?php 
		$i=1;
		foreach($data_kedekatan_relatif as $dp){
		 ?>
		 </thead>
		<tr>			
			<td><?php echo $i; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->dekat_relatif; ?></td>
			
		</tr>
		<?php 
		$i++;
		}
		?>
</table>
</div>
</div>
<a href="<?php echo base_url() . 'index.php/cDataMining/reset' ?>" class="btn btn-danger btn-xs" onClick="return confirm('Anda yakin ingin menghapus data ini?')" >
DANGER : roll back action
</a>