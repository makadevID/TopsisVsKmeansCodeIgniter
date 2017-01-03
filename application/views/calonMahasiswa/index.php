<div class="widget-content">            
<div class="table-responsive"> 
<table  id="example" class="table table-striped table-bordered"><h1>Data Calon Mahasiswa</h1>
		<thead>
		<tr>	
			<th>no</th>
			<th>no_pendaftaran</th>
			<th>nama </th>
			<th>jenis kelamin</th>
			<th>alamat</th>
			<th>no telepon</th>
			<th></th>
		</tr>
		</thead>
		<?php $i=1; 
			foreach($data_calon_mahasiswa as $dcm){
		 ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $dcm->no_pendaftaran; ?></td>
			<td><?php echo $dcm->nama_calon_mahasiswa; ?></td>
			<td><?php 

			if (($dcm->jenis_kelamin_calon_mahasiswa)==="0") {
				echo "Perempuan";				
			} else if (($dcm->jenis_kelamin_calon_mahasiswa)==="1") {
				echo "Laki-laki";
			}
 


			?></td>
			<td><?php echo $dcm->alamat_calon_mahasiswa; ?></td>
			<td><?php echo $dcm->no_telepon_calon_mahasiswa; ?></td>
			
			<td>
                <a href="<?php echo base_url() . 'index.php/cCalonMahasiswa/edit/'.$dcm->no_pendaftaran;?>" class="btn btn-primary btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>	
                </a>
                <a href="<?php echo base_url() . 'index.php/cCalonMahasiswa/hapus/'.$dcm->no_pendaftaran;?>" class="btn btn-danger btn-xs" onClick="return confirm('Anda yakin ingin menghapus data ini?')" >
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
<?php echo anchor(base_url().'index.php/cCalonMahasiswa/tambah','<input type="button" class="btn btn-primary" value="tambah">');?>