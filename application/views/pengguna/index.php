<div class="widget-content">            
<div class="table-responsive"> 
<table  id="example" class="table table-striped table-bordered"><h1>Data Pengguna</h1>
		<thead>
		<tr>	
			<th>no</th>			
			<th>username</th>
			<th>password</th>
			<th>hakakses</th>
			<th></th>
		</tr>
			</thead>
			<?php 
				$i=1;
				foreach($data_pengguna as $lihat)
			{
		?>
		<tr>	
			<td><?php echo $i; ?></td>		
			<td><?php echo $lihat->username; ?></td>
			<td><?php echo $lihat->password; ?></td>
			<td><?php 

				if (($lihat->hakakses)==="0") {
					echo "calon mahasiswa";				
				} else if (($lihat->hakakses)==="1") {
					echo "admin";
				}

			 ?></td>
			<td>
                <a href="<?php echo base_url() . 'index.php/cPengguna/edit/'.$lihat->username;?>" class="btn btn-primary btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>	
                </a>
                <a href="<?php echo base_url() . 'index.php/cPengguna/hapus/'.$lihat->username;?>" class="btn btn-danger btn-xs" onClick="return confirm('Anda yakin ingin menghapus data ini?')" >
                <span class="glyphicon glyphicon-trash"></span>	
                </a>
            </td>
		<?php 
		$i++;
			}
		?>
	
		
	
</table>
</div>
</div>
<?php echo anchor(base_url().'index.php/cPengguna/tambah','<input type="button" class="btn btn-primary" value="tambah">');?>
