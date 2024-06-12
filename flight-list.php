<?php
error_reporting(0);

@session_start();
if ($_SESSION['id_penumpang']){
	include 'private/lib/function.php';
	include "koneksi.php";
	$idletime =60 * 60; 

	if(isset($_SESSION["timestamp"])) {
		if (time()-$_SESSION["timestamp"]>$idletime){
			session_destroy();
			echo "<script>alert('Waktu Login Anda Telah Habis !'); window.location = 'login.php'</script>";
		}
	}else{
		$_SESSION["timestamp"]=time();
	}

//pembuatan session timestamp $_SESSION["timestamp"]=time();
	?>

<!DOCTYPE html>
<html class="load-full-screen">

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/flight-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:40:17 GMT -->
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="LimpidThemes">
	
	<title>Sky Airlines || </title>
	
    <!-- STYLES -->
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl-carousel-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/flexslider.css" rel="stylesheet" media="screen">
	<link href="assets/css/style4.css" rel="stylesheet" media="screen">
	<!-- LIGHT -->
	<link rel="stylesheet" type="text/css" href="assets/css/dummy.html" id="select-style">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="assets/css/light.css" rel="stylesheet" media="screen">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

</head>
<body class="load-full-screen">

<!-- BEGIN: PRELOADER -->

<!-- END: PRELOADER -->

<!-- BEGIN: COLOR SWITCHER -->
<div class="cswitcher">
	<div id="color-switcher">
		<h6>CHOOSE COLOR</h6>
		<ul>
			<li class="green" data-path="assets/css/color/green.css"></li>
			<li class="light-green" data-path="assets/css/color/light-green.css"></li>
			<li class="red" data-path="assets/css/dummy.html"></li>
			<li class="blue" data-path="assets/css/color/blue.css"></li>  
			<li class="brown" data-path="assets/css/color/brown.css"></li>
			<li class="purple" data-path="assets/css/color/purple.css"></li>
			<li class="orange" data-path="assets/css/color/orange.css"></li>
			<li class="yellow" data-path="assets/css/color/yellow.css"></li>
		</ul>
	</div>
</div>
<span id="stoggle"><i class="fa fa-cog"></i></span>
<!-- END: COLOR SWITCHER -->

<!-- BEGIN: SITE-WRAPPER -->
		<div class="site-wrapper">
			<div class="row header-top">
				<div class="container clear-padding">
					<div class="navbar-contact">
						<div class="col-md-7 col-sm-6 clear-padding">
							<a href="#" class="transition-effect"><i class="fa fa-phone"></i> (+91) 1234567890</a>
							<a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> support@email.com</a>
						</div>
						<div class="col-md-5 col-sm-6 clear-padding search-box">
							<div class="col-md-6 col-xs-5 clear-padding">
								<form >
									<div class="input-group">
									</div>
								</form>
							</div>
							<?php
							include 'konek.php';
							$username = $_SESSION['username'];
							$ambildata = mysqli_query($conn, "SELECT * FROM penumpang WHERE username = '$username' ");
							while ($data_user = mysqli_fetch_array($ambildata)) 
							{
								?>
								<div class="col-md-6 col-xs-7 clear-padding user-logged">
									<a href="#" class="transition-effect">
										Hi. <?php echo $data_user['username']; ?>
									</a>
									<?php 
								}
								?>
								<a href="logout.php" class="transition-effect">
									<i class="fa fa-sign-out"></i>Keluar
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="clearfix"></div>
			<div class="row light-menu">
				<div class="container clear-padding">
					<!-- BEGIN: HEADER -->
					<div class="navbar-wrapper">
						<div class="navbar navbar-default" role="navigation">
							<!-- BEGIN: NAV-CONTAINER -->
							<div class="nav-container">
								<div class="navbar-header">
									<!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

									<!-- BEGIN: LOGO -->
									<a class="navbar-brand logo"  href="index.html"></a>

					<img src="assets/images/1809403231_d1a07679-33ff-4f26-812b-678bd704fda6.png" style="height: 50px; width: 70px;"  href="index.html"></a>

								</div>

								<!-- BEGIN: NAVIGATION -->       
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a class="" href="index-3.php" ><i class="fa fa-home"></i> HOME </a>

										</li>

									
										<li class="dropdown mega">
											<a  href="about-us.php"><i class="fa fa-file"></i> TENTANG </i></a>
											
											<div class="clearfix"></div>
										</li>
										
											
										<li class="dropdown mega">
											<a class="" href="contact-us.php" ><i class="fa fa-ship"></i> KONTAK </i></a>
											
										
									</ul>
								</div>
								<!-- END: NAVIGATION -->
							</div>
							<!--END: NAV-CONTAINER -->
						</div>
					</div>
					<!-- END: HEADER -->
				</div>
			</div>
<!-- START: MODIFY SEARCH -->
	<div  class="row modify-search modify-flight">
		<div class="container clear-padding">
		</div>
	</div>
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="row">
	<div class="container">
		<!-- START: FILTER AREA -->
		<div class="col-md-3 clear-padding">
			<div class="filter-head text-center">
				<h4>Pencarian tambahan</h4>
			</div>
			<div class="filter-area">
				<div class="name-filter filter">
					<h5><i class="fa fa-plane"></i>Nama Pesawat</h5>
					<div class="input-group margin-bottom-sm">
						<input type="text" name="airline_name" class="form-control" required placeholder="Garuda Airliens">
						<span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
					</div>
				</div>
				<div class="airline-filter filter">
					<h5><i class="fa fa-plane"></i> Pesawat</h5>
					<ul>
						<li><input type="checkbox"><img src="assets/images/airline/vistara-2x.png" alt="cruise"> Garuda Indonesia</li>
						<li><input type="checkbox"><img src="assets/images/airline/indigo-2x.png" alt="cruise"> Lion Air</li>
						<li><input type="checkbox"><img src="assets/images/airline/spicejet-2x.png" alt="cruise"> Citilink</li>
						<li><input type="checkbox"><img src="assets/images/airline/jet-2x.png" alt="cruise"> Batik Air</li>
					</ul>
				</div>
				
			</div>
		</div>
		<!-- END: FILTER AREA -->
		
		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-9 flight-listing">
	
			<!-- START: LOWEST FARE SLIDER -->
			<div class="lowest-fare-slider col-md-12">
				<div class="owl-carousel" id="lowest-fare">
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
				<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
					<div class="text-center">
						<h5>22 Aug</h5>
						<span>Mulai IDR 1,2</span>
					</div>
				</div>
			</div>
			<!-- END: LOWEST FARE SLIDER -->
	
			<!-- START: SORT AREA -->
			<div class="sort-area col-md-12">
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Price</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Airline</option>
						<option> Vistara</option>
						<option> Indigo</option>
						<option> Jet</option>
						<option> Spicejet</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>User Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Name</option>
						<option> Ascending</option>
						<option> Descending</option>
					</select>
				</div>
			</div>
					<!-- END: SORT AREA -->
					<div class="clearfix"></div>
			<!-- START: FLIGHT LIST VIEW -->
			<div class="flight-list-view">
				<div class="airline-logo col-md-2 text-center clear-padding">
					<img src="assets/images/airline/vistara-2x.png" alt="cruise">
					<h6>Vistara</h6>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-8 text-center clear-padding flight-desc">
					<div class="take-off">
						<h4><i class="fa fa-plane"></i> 19:20 Senin, agustus 2022</h4> 
						<h5><i class="fa fa-map-marker"></i> Bogor (BGR), Indonesia (IDN)</h5>
					</div>
					<div class="landing">
						<h4><i class="fa fa-plane fa-rotate-90"></i> 21:20 Senin, Aug 3</h4> 
						<h5><i class="fa fa-map-marker"></i> Jakarta (DEL), Indonesia (IDN)</h5>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-4 clear-padding flight-desc text-center">
					<div class="duration">
						<h4><i class="fa fa-clock-o"></i> 02h 00m</h4>
						<h4>1 Stop</h4>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-2 flight-book text-center clear-padding">
					<div class="price">
						<h4>Rp. 400.00</h4>
						<h5>Per orang</h5>
					</div>
					<div class="book">
						<a href="#">BOOK</a>
						<h6 data-toggle="modal" data-target=".flight-details">Show Details <i class="fa fa-plus"></i></h6>
					</div>
				</div>
			</div>
			<!-- END: SORT AREA -->
			<?php 
								if(isset($_GET['cari'])){
									$rute_awal = $_GET['rute_awal'];
									$rute_akhir = $_GET['rute_akhir'];
								    $pp = $_GET['pp'];


									if ($rute_awal == "") echo "<script>window.location.href='index-3.php'</script>";

								}
							?>

			<div class="clearfix"></div>
			<!-- START: FLIGHT LIST VIEW -->
<?php
										// Include / load file koneksi.php
										include "koneksi.php";
										include "pagination3.php";
							 $kingZeyst = "";
	//        pagination config start
							 if (isset($_GET['pp'])){ // untuk keyword pencarian
							       		
							       		$pp = $_GET['pp'];
							       		 if (empty($kingZeyst))
       {
        $kingZeyst .= "pp = '$pp'";
   }
   else
   {
        $kingZeyst .= " AND pp = '$pp'";
   }
}
							       		if (isset($_GET['rute_akhir'])){ // untuk keyword pencarian
							       		
							       		$rute_akhir = $_GET['rute_akhir'];
							       		 if (empty($kingZeyst))
       {
        $kingZeyst .= "rute_akhir = '$rute_akhir'";
   }
   else
   {
        $kingZeyst .= " AND rute_akhir = '$rute_akhir'";
   }
}
									
										//        pagination config start
							       		if (isset($_GET['rute_awal'])){ // untuk keyword pencarian
							       		
							       		$rute_awal = $_GET['rute_awal'];
							       		 if (empty($kingZeyst))
       {
        $kingZeyst .= "rute_awal = '$rute_awal'";
   }
   else
   {
        $kingZeyst .= " AND rute_awal = '$rute_awal'";
   }
}

							        	$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
							        	$adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
							        	$rpp = 20; // jumlah record per halaman
	$sql ="SELECT * FROM rute art INNER JOIN transportasi kat JOIN type_transportasi sat WHERE art.id_transportasi=kat.id_transportasi=sat.id_type_transportasi  and ".$kingZeyst; // query silahkan disesuaikan
							        	$result = mysqli_query($conn, $sql); // eksekusi query

							        	$tcount = mysqli_num_rows($result); // jumlah total baris
							        	if ($tcount == 0) {
							        			echo "<center><h3>
							        			<div class='alert alert-danger' role='alert'>UPSS.. Mohon maaf penerbangan anda tidak ada
							  					<a href='index-3.php' class='alert-link'>UBAH PENCARIAN.</a>
												</div></h3>
							        			</center>";
							        	}
							        	if ($pp == 0) {
							        			echo "<center><h3>
							        			<div class='alert alert-danger' role='alert'> Tidak Ditemukan, Silahkan
							  					<a href='index-3.php' class='alert-link'>Kembali.</a>
												</div></h3>
							        			</center>";
							        	}
							        	$tpages = isset($tcount) ? ceil($tcount / $rpp) : 2; // jumlah total halaman
							        	$count = 0; // untuk paginasi
							        	$i = ($page - 1) * $rpp; // batas paginasi
							        	$no_urut = ($page - 1) * $rpp; // nomor urut
							        	$reload = $_SERVER['PHP_SELF'] . "?cari=" . $rute_awal .   $rute_akhir .  $pp .  "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
										//        pagination config end
											while (($count < $rpp) && ($i < $tcount)) {
												mysqli_data_seek($result, $i);
												$data = mysqli_fetch_array($result);

								      include('link.php'); // Meload link read more
            if(isset($_GET['submit'])){
			$dewasa = $_GET['dewasa'];
		    $anak   = $_GET['anak'];
			$query  = "UPDATE rute SET dewasa='".$dewasa."', anak='".$anak."' WHERE id_rute";
    $sql = mysqli_query($conn, $query);
									?>
			<div class="flight-list-view">
				<div class="airline-logo col-md-2 text-center clear-padding">
					<img src="assets/images/airline/vistara-2x.png" alt="cruise">
					<h6><?php echo $data['nama']; ?></h6>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-8 text-center clear-padding flight-desc">
					<div class="take-off">

						<h4><i class="fa fa-plane"></i>Jam Berangkat : <?php echo $data['jam_berangkat']; ?>  </h4> 
						<h5><i class="fa fa-map-marker"></i><?php echo $data['rute_awal']; ?></h5>
					</div>
					<div class="landing">
						<h4><i class="fa fa-plane fa-rotate-90"></i>Sampai Tujuan : <?php echo $data['jam_pulang']; ?></h4> 
						<h5><i class="fa fa-map-marker"></i> <?php echo $data['rute_akhir']; ?></h5>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-4 clear-padding flight-desc text-center">
					<div class="duration">
						<h4><i class="fa fa-clock-o"></i><?php echo $data['durasi']; ?> </h4>
						<h4>1 Stop</h4>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-2 flight-book text-center clear-padding">
					<div class="price">

						<h4>IDR.<?php echo number_format ($data['harga']);?></h4>
						<h5>Per Orang</h5>
					</div>
					<div class="book">
																<form method="post"  action="flight-booking.php" autocomplete="off">
<input type="hidden" name="dewasa" value="<?php echo  $dewasa ;?>">
<input type="hidden" name="id_rute" value="<?php echo $data['id_rute']; ?>">
<input type="hidden" name="pp" value="<?php echo $data['pp']; ?>">

<input type="hidden" name="nama" value="<?php echo $data['nama']; ?>">
<input type="hidden" name="rute_awal" value="<?php echo $data['rute_awal']; ?>">
<input type="hidden" name="rute_akhir" value="<?php echo $data['rute_akhir']; ?>">
<input type="hidden" name="jam_pulang" value="<?php echo $data['jam_pulang']; ?>">
<input type="hidden" name="jam_berangkat" value="<?php echo $data['jam_berangkat']; ?>">
<input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
<input type="hidden" name="durasi" value="<?php echo $data['durasi']; ?>">
<input type="hidden" name="anak" value="<?php echo $anak ?>">






											<button type="submit" name="tambah"   value="Cari" class="search-button btn transition-effect">Pesan!</button>
					</form>
						<h6 data-toggle="modal" data-id_rute='<?php echo $data['id_rute'];?>' data-id_rute='<?php echo $data['id_rute'];?>' data-target=".flight-details">Lihat Lengkap <i class="fa fa-plus"></i></h6>
					</div>
				</div>
			</div>

  <?php 
										$i++;
										$count++;
							}
										}
										?>

			<div class="clearfix"></div>		
			<!-- END: FLIGHT LIST VIEW -->
			
			<!-- START: PAGINATION -->
			<div class="bottom-pagination">
				<nav class="pull-right">
					
				</nav>
			</div>
			<!-- END: PAGINATION -->
		</div>
		<!-- END: INDIVIDUAL LISTING AREA -->
	</div>
</div>
</div>
<!-- END: LISTING AREA -->



				<?php
include "page/footer.php";
		?>



<div class="modal fade flight-details" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="flight-details-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
					<!-- START: FLIGHT MODAL -->

<div id="hasil-menu"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END: FLIGHT MODAL -->

</div>
<!-- END: SITE-WRAPPER -->

<!-- Load Scripts -->
<script src="assets/js/respond.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/wow.min.js"></script>
<script src="assets/js/js.js"></script>
<script>
	
	/* Price Range Slider */
	  
	$(function() {
		"use strict";
		$( "#price-range" ).slider({
		  range: true,
		  min: 0,
		  max: 100,
		  values: [ 3, 50 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$ " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$ " + $( "#price-range" ).slider( "values", 0 ) +
		  " - $ " + $( "#price-range" ).slider( "values", 1 ) );
	  });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.flight-details').on('show.bs.modal', function (e) {
            var id_rute = $(e.relatedTarget).data('id_rute');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'page.php',
                data :  'id_rute='+ id_rute,
                success : function(data){
                $('#hasil-menu').html(data);//menampilkan data ke dalam modal
                }
            });
           
         });
    });
  </script>
</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/flight-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:40:17 GMT -->
</html>

<?php  } else{ include 'login.php';}?>
