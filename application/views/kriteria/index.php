<div class="widget-content">            
<div class="table-responsive"> 
<table class="table table-striped table-bordered">
<h3> kriteria</h3>
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
			<th></th>
			
		</tr>
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
			<td>
                <a href="<?php echo base_url() . 'index.php/cKriteria/edit/'.$dp->keterangan;?>" class="btn btn-primary btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>	
                </a>
                
            </td>
			
		</tr>
		<?php 
		}
		?>
</table>
</div>
</div>

