
<!DOCTYPE html>
<html>
<head>
	<title>carikode</title>
</head>
<body>
	<h1>Edit Pengguna</h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
	<form method="post" action="<?php echo base_url().'index.php/cPengguna/update_act' ?>">
		<input type="hidden" name="username" value="<?php echo $tes->username ?>">
		<div class="form-group">
		    <label for="password">password</label>
		    <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $tes->password ?>">
		</div>
	<?php
			if (($tes->username)=='admin') {
		?>
		<div class="form-group">
		    <label for="hakakses">hak akses</label>
			<select name="hakakses" multiple class="form-control">
			  <option value="1" 
						  <?php 
						  	if ($tes->hakakses == "1") {
						  		echo 'selected';
						  	}	
						  ?>>
						  	admin</option>
						  <option value="0"
						  <?php 
						  	if ($tes->hakakses == "0") {
						  		echo 'selected';
						  	}	
						  ?>>
						  calon mahasiswa</option>
			</select>
		</div>
		
	
	</form>
		<?php
		} else {
    ?>
    	<div class="form-group">
		    <label for="hakakses">hak akses</label>
			<select name="hakakses" multiple class="form-control" readonly=readonly disabled="disabled">
			  <option value="1" 
						  <?php 
						  	if ($tes->hakakses == "1") {
						  		echo 'selected';
						  	}	
						  ?>>
						  	admin</option>
						  <option value="0"
						  <?php 
						  	if ($tes->hakakses == "0") {
						  		echo 'selected';
						  	}	
						  ?>>
						  calon mahasiswa</option>
			</select>
		</div>

    <?php
		}	
	}

	?>
	<input type="submit" value="Update" class="btn btn-primary">
</body>

</html>