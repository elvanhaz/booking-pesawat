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
<?php
include"page/header.php";
?>

	<!-- START: ABOUT-US -->
	<div class="row about-intro">
		<div class="container clear-padding">
			<div class="col-md-6 col-sm-6">
				<h2>SKY AIRLINES</h2>
				<h4>Apa Kalian Tau ?</h4>
				<p>Website ini dibuat oleh junior programmer yang bernama imanudin elvanhaz yang kini belajar di sekolah smkn 1 ciomas, dan web ini adalah tugas akhir dari sekolah yang harus diselesaikan tugas tersebut bernama Uji Kompetensi atau yang disingkat ujikom, saya berharap dengan membuat website ini sebagai investasi buat kedepan agar terbiasa didunia pekerjaan.</p>
			</div>
			
		</div>
	</div>
	<!-- END: ABOUT-US -->
	
	<!-- START: OUR TEAM -->
	<div class="row our-team">
		<div class="container clear-padding">
			<div class="section-title text-center">
				<h2>SINGLE</h2>
				<h4></h4>
			</div>
			<div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="team-member">
						
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="team-member">
						<h4>Imnudin Elvanhaz</h4>
						<h5>Junior Programmer</h5>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="team-member">
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: OUR TEAM -->
	
	<!-- START: OUR SERVICE -->
	<div class="row our-service">
		<div class="overlay">
			<div class="container clear-padding">
				<div class="service-left col-md-4">
					<div class="section-title">
						<h2>LAYANAN JASA</h2>
						<h4>Apa Yang Kami Tawarkan ?</h4>
					</div>
					<p>Untuk saat ini kami hanya menawarkan jasa pembelian tiket pesawat atau E-TIKET kami berharap akan mengembangkan website ini menjadi lebih baik kedepan nya		.</p>
				</div>
				<div class="service-right col-md-8">
					<div class="col-md-6 col-sm-6 text-center service">
						<i class="fa fa-plane"></i>
						<div class="service-desc">
							<h5>PEMESANAN PESAWAT</h5>
							<p>Sedang Berjalan .</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 text-center service">
						<i class="fa fa-bed"></i>
						<div class="service-desc">
							<h5>PEMESANAN HOTEL</h5>
							<p>Segera Hadir!.</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 col-sm-6 text-center service">
						<i class="fa fa-ship"></i>
						<div class="service-desc">
							<h5>PEMESANAN KAPAL LAUT</h5>
							<p>Segera Hadir!.</p>
						</div>
					</div>
					
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: OUR SERVICE -->
	
	
</section>
<!-- END: CONTENT SECTION -->

<!-- START: FOOTER -->
		<?php
include "page/footer.php";
		?>


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
</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:45:41 GMT -->
</html>
<?php  } else{ include 'login.php';}?>
