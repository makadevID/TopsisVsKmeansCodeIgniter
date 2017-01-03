<div class="widget-content">     
<div class="table-responsive">       
	<table id="example" class="table table-striped table-bordered"><h1>Nilai</h1>
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
				<th colspan="2">Kelompok</th>
				
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
	</table>
</div>
</div>

<br /><br /><br /><br />

<div class="widget-content">            
<table class="table table-striped table-bordered">
<h1>Rangking</h1>
		<tr>			
			<th>id cluster</th>
			<th>no pendaftaran</th>
			<th>nama calon pendaftar mahasiswa</th>
			<th>nilai</th>
			<th>ranking</th>
			<th>Kelompok</th>
			
			
		</tr>
		<?php foreach($data_ranking as $dp){
		 ?>
		<tr>			
			<td><?php echo $dp->id_cluster; ?></td>
			<td><?php echo $dp->no_pendaftaran; ?></td>
			<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
			<td><?php echo $dp->nilai; ?></td>
			<td><?php echo $dp->ranking; ?></td>
			<td><?php 

				if (($dp->nilai)<='0.6') {
					echo "tidak berprestasi";				
				} else if (($dp->nilai)>='0.7') {
					echo "berprestasi";
				}

			 ?></td>
			
			
		</tr>
		<?php 
		}
		?>
</table>
</div>
