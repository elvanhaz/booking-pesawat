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

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/flight-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:40:17 GMT -->

<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="LimpidThemes">
	
	<title>SKY AIRLINES</title>
	
    <!-- STYLES -->
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl-carousel-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/flexslider.css" rel="stylesheet" media="screen">
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	<!-- LIGHT -->
	<link rel="stylesheet" type="text/css" href="assets/css/dummy.html" id="select-style">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="assets/css/light.css" rel="stylesheet" media="screen">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

</head>
<body class="load-full-screen">

<!-- BEGIN: PRELOADER -->
<div id="loader" class="load-full-screen">
	<div class="loading-animation">
		<span><i class="fa fa-plane"></i></span>
		<span><i class="fa fa-bed"></i></span>
		<span><i class="fa fa-ship"></i></span>
		<span><i class="fa fa-suitcase"></i></span>
	</div>
</div>
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
	
	<!-- END: PAGE TITLE -->
	
	<!-- START: BOOKING TAB -->
	<div class="row booking-tab">
		<div class="container clear-padding">
			<ul class="nav nav-tabs">
				<li class=" col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#review-booking" class="text-center"><i></i> <span></span></a></li>
				<li class="active col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#billing-info" class="text-center"><i class="fa fa-male"></i> <span>Pembayaran</span></a></li>	
				<li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#billing-infos" class="text-center"><i></i> <span></span></a></li>
			</ul> 
		</div>
	</div>
	<?php

if($_POST['id_rute'])

	$kode_pemesanan = $_POST['kode_pemesanan'];

{

?>
									<h6><?php echo $kode_pemesanan; ?></h6>

	<div class="row booking-detail">
		<div class="container clear-padding">
			<div class="tab-content">
				<div id="review-booking" class="tab-pane fade">
					<div class="col-md-8 col-sm-8">
						<div class="flight-list-v2">
							<div class="flight-list-main">	
								<div class="col-md-2 col-sm-2 text-center airline">
									<img src="assets/images/airline/vistara-2x.png" alt="cruise">
								</div>
								<div class="col-md-3 col-sm-3 departure">
									<h4><i class="fa fa-plane"></i><?php echo $rute_awal; ?></h4>
									<h5 class="bold">Berangkat: <?php echo $jam_berangkat; ?></h5>
								</div>
								<div class="col-md-4 col-sm-4 stop-duration">
									<div class="flight-direction">
									</div>
									<div class="stop">
									</div>
									<div class="stop-box">
										<span>0 Stop</span>
									</div>
									<div class="duration text-center">
										<span><i class="fa fa-clock-o"></i> <?php echo $durasi; ?></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 destination">
									<h4><i class="fa fa-plane fa-rotate-90"></i> <?php echo $rute_akhir; ?></h4>
									<h5 class="bold">Pulang: <?php echo $jam_pulang; ?></h5>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="flight-list-footer">
								<div class="col-md-6 col-sm-6 col-xs-6 sm-invisible">
									<span><i class="fa fa-plane"></i> Economy</span>
									<span class="refund"><i class="fa fa-undo"></i> Refundable</span>
									<span><i class="fa fa-suitcase"></i> 10 KG</span>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 clear-padding">
									<div class="pull-right">
										<a href="#">Edit Flight</a>
									</div>
								</div>
							</div>
						</div>
						
 <?php
							include 'konek.php';
							$username = $_SESSION['username'];
							$ambildata = mysqli_query($conn, "SELECT * FROM penumpang WHERE username = '$username' ");
							while ($data_user = mysqli_fetch_array($ambildata)) 
							{
								?>

<div class="login-box">
							<h3>Detail Pemesan   </h3>
							<div class="booking-form">
								<div class="col-md-10 col-sm-10">

						<form method="post" action="proses/tambah_pesanan.php" id="tambah">
																		<div class="col-md-3 ol-sm-3">
										<label>Pilih Title</label>
										<select class="form-control">
											<option>Tuan</option>
											<option>Nyonya</option>
											<option>Lainnya</option>
										</select>
									</div>

									<div class="col-md-8 ol-sm-8">
										<label>Nama Lengkap</label>
										<input type="text"  value="<?php echo $data_user['username']; ?>" required class="form-control">
					<input type="hidden" name='tempat_pemesanan' value="<?php echo $data_user['alamat_penumpang']; ?>" required class="form-control">
										     <input type="hidden" name='id_rute' value="<?php echo $id_rute ?>" required class="form-control">
								             <input type="hidden" name='tanggal_pemesanan' value="<?php echo $pp ?>" required class="form-control">
								 			 <input type="hidden" name='tanggal_berangkat' value="<?php echo $pp ?>" required class="form-control">
                                             <input type="hidden" name='tujuan' value="<?php echo $rute_akhir ?>" required class="form-control">
								             <input type="hidden" name='total_bayar' value="<?php echo number_format( $total); ?>" required class="form-control">
										     <input type="hidden" name='jam_berangkat' value="<?php echo  $jam_berangkat; ?>" required class="form-con    trol">
										     <input type="hidden" name='jam_cekin' value="<?php echo  $jam_berangkat; ?>" required class="form-control">


									</div>
																<div class="col-md-3 ol-sm-3">
										<label>Pilih Negara</label>
										<select  class="form-control">
									        <option>+62 Indonesia</option>
											<option>+1 United States</option>

											<option>+1 Canada</option>
											<option>+44 United Kingdom</option>
											<option>+91 India</option>
										</select>
									</div>

									<div class="col-md-8 ol-sm-8">
										<label>No Telepon</label>
										<input type="text" value="<?php echo $data_user['telefone']; ?>" required class="form-control">
									</div>
									
								
									<div class="col-md-12">
									</div>
									
								</div>
							
								<div class="col-md-6 col-sm-6 text-center">
									<div class="social-media-login">
									</div>
								</div>
							</div>
						</div>
						<?php
}
						?>
<?php

$dewasa = $_POST['dewasa'];

for($a=2;$a<=$dewasa;$a++)

{

?>

						<div class="login-box">
							<h3>Penumpang <?php echo $a; ?>  </h3>
							<div class="booking-form">
								<div class="col-md-10 col-sm-10">

										<div class="col-md-3 ol-sm-3">
										<label>Pilih Titke</label>
										<select name='<?php echo $jumlah; ?>' class="form-control">
											<option>Tuan</option>
											<option>Nyonya</option>
											<option>Lainnya</option>
										</select>
									</div>

									<div class="col-md-8 ol-sm-8">
										<label>Nama</label>
										<input type="text" name='<?php echo $jumlah; ?>'  class="form-control">
									</div>
									<div class="col-md-12">
									</div>
									
								</div>
							
								<div class="col-md-6 col-sm-6 text-center">
									<div class="social-media-login">
									</div>
								</div>
							</div>
						</div>
					<?php
}
}
								?>
															<div class="booking-form">

								<div class="text-center">
										<button type="submit">CONTINUE <i class="fa fa-chevron-right"></i></button>
									</div>
							</div>
					</div>
					<div class="col-md-4 col-sm-4 booking-sidebar">
						<div class="sidebar-item">
							<h4><i class="fa fa-bookmark"></i>Total Keseluruhan</h4>
							<div class="sidebar-body">
								<table class="table">
									<?php
						function buatid($id_terakhir, $panjang_kode, $panjang_angka) {
							$kode = substr($id_terakhir, 0, $panjang_kode);
							$angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
							$angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
							$id_baru = $kode.$angka_baru.$booking;
							return $id_baru;
						}
						$konek = mysqli_connect("localhost","root","","db_tiket");
						$sql = mysqli_fetch_array(mysqli_query($conn,"SELECT max(kode_kursi) as maxKode from pemesanan"));
						$newID = buatid($sql['maxKode'],1,4);

						$po = mysqli_fetch_array(mysqli_query($conn,"SELECT max(kode_pemesanan) as maxBooking from pemesanan"));
						$new = buatid($po['maxBooking'],1,4);
						?>
					<input type="hidden" name="kode_pemesanan" value="<?php echo $new; ?>">
					<input type="hidden" name='kode_kursi' value="<?php echo $newID ?>" required class="form-control">

</form>

															<tr>
										<td>Kode Kursi</td>
											
										<td  ><?php echo $newID; ?> </td>
									</tr>
									<tr>
										<td>Dewasa</td>
										<td><?php echo $dewasa; ?>X </td>
									</tr>
									<tr>
										<td>Anak</td>
										<td><?php echo $anak; ?>X</td>
									</tr>
									<tr>
										<td>Asuransi</td>
										<td>IDR 0</td>
									</tr>
									<tr>
										<td>Biaya Layanan</td>
										<td style="color: blue">GRATIS</td>
									</tr>
									<tr>
										<td>Total Harga</td>
										<td class="total">IDR <?php echo number_format( $total); ?></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="sidebar-item contact-box">
							<h4><i class="fa fa-phone"></i>Need Help?</h4>
							<div class="sidebar-body text-center">
								<p>Butuh Bantuan ? Silahkan hubungi admin</p>
								<h2>+91 1234567890</h2>
							</div>
						</div>
					</div>
				</div>
				<div id="passenger-info" class="tab-pane fade">
					<div class="col-md-8 col-sm-8">
						<div class="passenger-detail">
							<h3>Passenger Details</h3>
							<div class="passenger-detail-body">

								<form >
									<div class="col-md-6 ol-sm-6">
										<label>First Name</label>
										<input type="text" name="firstname" required class="form-control">
									</div>
									<div class="col-md-6 ol-sm-6">
										<label>Last Name</label>
										<input type="text" name="lastname" required class="form-control">
									</div>
									<div class="col-md-6 ol-sm-6">
										<label>Email</label>
										<input type="email" name="email" required class="form-control">
									</div>
									<div class="col-md-6 ol-sm-6">
										<label>Verify Email</label>
										<input type="email" name="verify_email" class="form-control">
									</div>
									<div class="col-md-6 ol-sm-6">
										<label>Country Code</label>
										<select name="countrycode" class="form-control">
											<option>+1 United States</option>
											<option>+1 Canada</option>
											<option>+44 United Kingdom</option>
											<option>+91 India</option>
										</select>
									</div>
									<div class="col-md-6 ol-sm-6">
										<label>Phone Number</label>
										<input type="text" name="phonenumber" class="form-control" required>
									</div>
									<div class="col-md-12">
										<label><input type="checkbox" name="alert"> Send me newsletters and updates</label>
									</div>
									<div class="text-center">
										<button type="submit">CONTINUE <i class="fa fa-chevron-right"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 booking-sidebar">
						<div class="sidebar-item">
							<h4><i class="fa fa-phone"></i>Need Help?</h4>
							<div class="sidebar-body text-center">
								<p>Need Help? Call us or drop a message. Our agents will be in touch shortly.</p>
								<h2>+91 1234567890</h2>
							</div>
						</div>
					</div>
				</div>
				<div id="billing-info" class="tab-pane fade in active">
					<div class="col-md-8 col-sm-8">
						<div class="passenger-detail">
							<h3>Pilih Pembayaran </h3>
							<div class="passenger-detail-body">
																	<div class="user-preference">
								<h4 data-toggle="collapse" data-target="#flight-preferencea" aria-expanded="false" aria-controls="flight-preference">
										BRI<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
								</h4>
								<div class="collapse" id="flight-preferencea">
									<form >
										<div class="col-md-7 col-sm-7">
											<div class="col-md-6 col-sm-6 text-center airline">
									<img style="width: 120px;" src="assets/images/Tidak berjudul.png" alt="cruise">
									<h6><?php echo $nama; ?></h6>
								</div>
										</div>
										<div class="col-md-7 col-sm-7">
											<label><b>Atas Nama</b> : Sky Airlines</label>
										</div>
										<div class="col-md-6 col-sm-6">
											<label><b>No Rekening</b> : 07979786</label>
											
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 text-center">
											 <button type="submit">PESAN</button>
										</div>
									</form>
								</div>
							</div>	
																<div class="user-preference">
								<h4 data-toggle="collapse" data-target="#flight-preference" aria-expanded="false" aria-controls="flight-preference">
										BCA <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
								</h4>
								<div class="collapse" id="flight-preference">
								<form >
										<div class="col-md-7 col-sm-7">
											<div class="col-md-6 col-sm-6 text-center airline">
									<img style="width: 120px;" src="assets/images/1280px-BCA_logo.svg.png" alt="cruise">
									<h6><?php echo $nama; ?></h6>
								</div>
										</div>
										<div class="col-md-7 col-sm-7">
											<label><b>Atas Nama</b> : Sky Airlines</label>
										</div>
										<div class="col-md-6 col-sm-6">
											<label><b>No Rekening</b> : 03456732</label>
											
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 text-center">
											 <button type="submit">PESAN</button>
										</div>
									</form>
								</div>
							</div>	
															<div class="user-preference">
								<h4 data-toggle="collapse" data-target="#flight-preferences" aria-expanded="false" aria-controls="flight-preference">
										MANDIRI <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
								</h4>
								<div class="collapse" id="flight-preferences">
								<form >
										<div class="col-md-7 col-sm-7">
											<div class="col-md-6 col-sm-6 text-center airline">
									<img style="width: 120px;" src="assets/images/							Bank_Mandiri_logo.svg.png
" alt="cruise">
									<h6><?php echo $nama; ?></h6>
								</div>
										</div>
										<div class="col-md-7 col-sm-7">
											<label><b>Atas Nama</b> : Sky Airlines</label>
										</div>
										<div class="col-md-6 col-sm-6">
											<label><b>No Rekening</b> : 3456789</label>
											
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 text-center">
											 <button type="submit">PESAN</button>
										</div>
									</form>
								</div>
							</div>	
							<div class="user-preference">
								<h4 data-toggle="collapse" data-target="#flight-preferenced" aria-expanded="false" aria-controls="flight-preference">
										<i class="fa fa-plane"></i> Paypal <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
								</h4>
								<div class="collapse" id="flight-preferenced">
								<form >
										<div class="col-md-7 col-sm-7">
											<div class="col-md-6 col-sm-6 text-center airline">
									<img  style="width: 120px;" src="assets/images/paypal-logo.png

" alt="cruise">
									<h6><?php echo $nama; ?></h6>
								</div>
										</div>
										<div class="col-md-7 col-sm-7">
											<label><b>Atas Nama</b> : Sky Airlines</label>
										</div>
										<div class="col-md-6 col-sm-6">
											<label><b>No Rekening</b> : 855965467</label>
											
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 text-center">
											 <button type="submit">PESAN</button>
										</div>
									</form>
								</div>
							</div>	
								
								
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 booking-sidebar">
						<div class="sidebar-item">
							<h4><i class="fa fa-phone"></i>Butuh Bantuan?</h4>
							<div class="sidebar-body text-center">
								<p>Butuh Bantuan? Silahkan hubungi customer care kami apa bila ada masalah.</p>
								<h2>+62 0896234567</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: BOOKING TAB -->
<?php 
include "page/footer.php";
?>

</div>
<!-- END: SITE-WRAPPER -->
<!--=================================================-->
        <audio id="klik" src="private/assets/audio/klik.mp3"></audio>
    <audio id="success" src="private/assets/audio/success.mp3"></audio>
    <audio id="error" src="private/assets/audio/error.wav"></audio>
        <script src="private/assets/js/sweetalert.js"></script>
       <script src="private/js/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$('#tambah').submit(function(e){
					e.preventDefault();
					$.ajax({
						url: $(this).attr('action'),
						method: $(this).attr('method'),
						data: new FormData(this),
						dataType: 'JSON',
						contentType: false,
						processData: false,
						success: function(data){
							if(data.hasil == true)
							{
							
								window.location.assign('flight-booking.php');
							}
							else{
								swal({
									title : 'Gagal',
									icon  : 'error',
									text  : data.pesan,
								});
							}
						}
					});
			});
		});
	</script>
<!-- Load Scripts -->
<script src="assets/js/respond.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/wow.min.js"></script>
<script src="assets/js/js.js"></script>
</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/flight-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:40:17 GMT -->
</html>

<?php  } else{ include 'login.php';}?>
