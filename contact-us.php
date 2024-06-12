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


	
	<!-- START: CONTACT-US -->
	<div class="row contact-address">
		<div class="container clear-padding">
			<div class="text-center">
				<h2>KONTAK KAMI</h2>
				<h5>.</h5>
				<div class="space"></div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-map-marker"></i>
					<p>Kota Bogor</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-envelope-o"></i>
					<p><a href="mailto:your@email.com">Elvanhazi@email.com</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-phone"></i>
					<p>+62 08967654345</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTACT-US -->
	<!-- START: MAP & CONTACT FORM -->
	<div class="row">
		<div class="container clear-padding">
		
			<div class="col-md-6 col-sm-6 contact-form">
				<div class="col-md-12">
					<h2>KIRIM PESAN</h2>
					<h5>silahkan kirim pesan apabila anda masalah dengan sky airlines</h5>
				</div>
				<form >
					<div class="col-md-6 col-sm-6">
						<input type="text" name="name" required class="form-control" placeholder="Nama">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" name="email" required class="form-control" placeholder="Your Email">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<input type="text" name="message-title" required class="form-control" placeholder="Message Title">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<textarea class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="text-center">
						<button type="submit" class="btn btn-default submit-review">KIRIM</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END: MAP & CONTACT FORM -->


				<?php
include "page/footer.php";
		?>


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

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:45:41 GMT -->
</html>
<?php  } else{ include 'login.php';}?>
