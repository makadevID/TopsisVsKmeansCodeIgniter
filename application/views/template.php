<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>TOPSIS vs K-MEANS</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/navbar-fixed-top.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/business-casual.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/plugins/morris.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.css" rel="stylesheet">

<script src="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.js"></script>

<!-- JQUERY -->
<link href="<?php echo base_url()?>assets/dataTables/media/css/jquery.dataTables.min.css" rel="stylesheet">
   
<style>
    
    th { vertical-align: middle; }
    td { vertical-align: middle; }
    body { background-color: #333; }
    
</style>   

</head>
 
<body>


   
		<?php
			 if ($this->session->userdata('hakakses')==="1") {
		?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">K-Means vs TOPSIS</a>
            </div>
            <!-- Top Menu Items -->
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('cDataMining/index') ?>">Rekomendasi Calon Mahasiswa Berprestasi</a></li>
                    <li><a href="<?php echo site_url('cHasilDataMiningPerbandingan/index') ?>">Perbandingan</a></li>
    				<li><a href="<?php echo site_url('cWelcomeAdmin/index') ?>">beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> system <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                             <li><a href="<?php echo site_url('cPengguna/index') ?>">Pengguna</a></li>
                             <li><a href="<?php echo site_url('cCalonMahasiswa/index') ?>">data calon</a></li>
                             <li><a href="<?php echo site_url('cKriteria/index') ?>">Kriteria Bobot</a></li>
    						 <li class="divider"></li>
    						 <li><a href="<?php echo site_url('cParameter/index') ?>">Input Parameter<span class="sr-only">(current)</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 

                        	<?php echo "ADMIN"; ?> 
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('welcome/logout') ?>">log out<span class="sr-only">(current)</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>    
        </nav>

<?php

	} else {
		?>



<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <?php 
                    if ($this->session->userdata('hakakses')==="0") {
                ?>
                
                <li><a href="<?php echo site_url('cHasilDataMining/index') ?>">Rekomendasi Calon Mahasiswa Berprestasi</a></li>
                    
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 



		
                    	<?php echo "calon mahasiswa"; ?>




                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('welcome/logout') ?>">log out<span class="sr-only">(current)</span></a></li>
                    </ul>
                </li>
                <?php
	                 
	                    }
                ?> <?php 
                    if ($this->session->userdata('hakakses')==="") {
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> system <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                         <li><a href="<?php echo site_url('cPengguna/index') ?>">edit profile</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 



		
                    	<?php echo "calon mahasiswa"; ?>




                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('welcome/logout') ?>">log out<span class="sr-only">(current)</span></a></li>
                    </ul>
                </li>
                <?php
	                 
	                    }
                ?> 
            </ul>
            
        </nav>


		<?php
			 	
			 }
?>




 

 
 
 

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                		<!-- /.container -->
                     	 <?= $contents ?>
                </div>
            </div>
        </div>


    </div>
    




 
 
 </div> <!-- /container -->
 
 	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>STIMIK DENPASAR BALI</p>
                </div>
            </div>
        </div>
    </footer>


   



<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/dataTables/media/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/dataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
       $('#example').DataTable(); 
       $('#example1').DataTable();
       $('#example2').DataTable(); 
       $('#example3').DataTable();
       $('#example4').DataTable(); 
       $('#example5').DataTable();
       $('#example6').DataTable(); 
       $('#example7').DataTable();
       $('#example8').DataTable(); 
       $('#example9').DataTable();
    });

    $('.carousel').carousel({
    interval: 5000 //changes the speed
    })
</script>
    
</html>    