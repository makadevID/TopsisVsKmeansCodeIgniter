<div class="widget-content">            
<div class="table-responsive"> 
<table  id="example" class="table table-striped table-bordered"><h1>Data Parameter</h1>
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
			<th></th>
			<th></th>
		</tr>
			</thead>
			<?php 
				$i=1;
				foreach($data_parameter as $dp){
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
			<td>
                <a href="<?php echo base_url() . 'index.php/cParameter/edit/' .$dp->id_cluster;?>" class="btn btn-primary btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>	
                </a>
            </td>
            <td>
                <a href="<?php echo base_url() . 'index.php/cParameter/hapus/' .$dp->id_cluster;?>" class="btn btn-danger btn-xs" onClick="return confirm('Anda yakin ingin menghapus data ini?')" >
                <span class="glyphicon glyphicon-trash"></span>	
                </a>
            </td>
		</tr>
		<?php 
		$i++;
		}
		?>
</table>
</div>
</div>
<?php echo anchor(base_url().'index.php/cParameter/tambah','<input type="button" class="btn btn-primary" value="tambah">');?>