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
			<div class="row">
				<div id="room-gallery" class="carousel slide bg-slider" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#room-gallery" data-slide-to="0" class="active"></li>
						<li data-target="#room-gallery" data-slide-to="1"></li>
						<li data-target="#room-gallery" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="assets/images/sa.jpg" alt="Cruise">
							<div class="carousel-caption">
								<div class="wrapper">
									
								</div>
							</div>
						</div>
						<div class="item">
							<img src="assets/images/874546c4-0784-4d4f-903a-706185d736177dfb85ffbcc06401975fe1738a0cadbe.jpg" alt="Cruise">
							<div class="carousel-caption">
								<div>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="assets/images/asad.jpg" alt="Cruise">
							<div class="carousel-caption">
								<div class="wrapper">
									
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#room-gallery" role="button" data-slide="prev">
						<span class="fa fa-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#room-gallery" role="button" data-slide="next">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- BEGIN: SEARCH SECTION -->
			<div class="row bottom-search">
				<div class="container clear-padding">
					<div class="col-md-12 search-section">
						<div role="tabpanel">
							<!-- BEGIN: CATEGORY TAB -->
							<ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
								<li role="presentation" class="active text-center">
									<a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
										<i class="fa fa-plane"></i> 
										<span>PESAWAT</SPAN>
										</a>
									</li>

								</ul>
								<!-- END: CATEGORY TAB -->

								<!-- BEGIN: TAB PANELS -->
								<div class="tab-content">
									<!-- BEGIN: FLIGHT SEARCH -->
									<div role="tabpanel" class="tab-pane active" id="flight">
										<form method="get"  action="flight-list.php" autocomplete="off">
											<div class="col-md-12 product-search-title">Cari tiket pesawat murah</div>
											<div class="col-md-12 search-col-padding">
											</div>
											<div class="clearfix"></div>
											<div class="col-md-4 col-sm-4 search-col-padding">
												<label>Dari</label>
												<div class="input-group"> 
	<select name="rute_awal" data-live-search="true"  data-placeholder="Rute Awal" data-width="100%" class="selectpicker" id="demo-chosen-select " tabindex="2" required>
														<?php
														include "konek.php";
														$query = mysqli_query($conn, "SELECT * from rute");
														while ($data=mysqli_fetch_array($query)) {
															?>
															<option value="<?php echo $data['rute_awal']; ?>"><?php echo $data['rute_awal']; ?></option>
														<?php } ?>
													</select>
													<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 search-col-padding">
												<label>Ke</label>
												<div class="input-group">
	<select name="rute_akhir" data-live-search="true"  data-placeholder="Rute Akhir" data-width="100%" class="selectpicker" id="demo-chosen-select " tabindex="2" required>
														<?php
														include "konek.php";
														$query = mysqli_query($conn, "SELECT * from rute");
														while ($data=mysqli_fetch_array($query)) {
															?>
															<option value="<?php echo $data['rute_akhir']; ?>"><?php echo $data['rute_akhir']; ?></option >
														<?php } ?>
													</select>
													<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 search-col-padding">
										<label>Pergi</label>
										<div class="input-group">
											<input  type="text" id="departure_date" name="pp" class="form-control selectpicker" placeholder="DD/MM/YYYY" required>
											<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
										</div>
									</div>
									
									<div class="clearfix"></div>
									<div class="col-md-4 col-sm-4 search-col-padding">
										<label>Dewasa</label><br>
										<input id="adult_count" name="dewasa" value="1" maxlength="1" max="7" class="form-control quantity-padding" required>
									</div>
									<div class="col-md-4 col-sm-4 search-col-padding">
										<label>Anak</label><br>
										<input type="text" id="child_count" name="anak" value="0" max="7" maxlength="1" class="form-control quantity-padding" required>
									</div>
									
									<div class="col-md-4 col-sm-4 search-col-padding">
										<label>Kelas</label><br>
										<select class="selectpicker">
											<option>Economy</option>
										    <option>Business</option>
										</select>
									</div>
											
										<div class="clearfix"></div>
										<div class="col-md-12 search-col-padding">
											<button type="submit"  name="submit"  value="Cari" class="search-button btn transition-effect">Cari Sekarang!</button>
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
								

								<!-- END: FLIGHT SEARCH -->

								<!-- START: HOTEL SEARCH -->

								<!-- END: HOTEL SEARCH -->
								
								<!-- START: BEGIN HOLIDAY -->
								<div role="tabpanel" class="tab-pane" id="holiday">
									<form >
										<div class="col-md-12 product-search-title">Book Holiday Packages</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>From</label>
											<div class="input-group">
												<input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>I Want To Go</label>
											<div class="input-group">
												<input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Starting From</label>
											<div class="input-group">
												<input type="text" id="package_start" class="form-control" placeholder="DD/MM/YYYY">
												<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Duration(Optional)</label><br>
											<select class="selectpicker" name="holiday_duration">
												<option>3 Days</option>
												<option>5 Days</option>
												<option>1 Week</option>
												<option>2 Weeks</option>
												<option>1 Month</option>
												<option>1+ Month</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Package Type(Optional)</label><br>
											<select class="selectpicker" name="package_type">
												<option>Group</option>
												<option>Family</option>
												<option>Individual</option>
												<option>Honeymoon</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Budget(Optional)</label><br>
											<select class="selectpicker" name="package_budget">
												<option>500</option>
												<option>1000</option>
												<option>1000+</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 search-col-padding">
											<button type="submit" class="search-button btn transition-effect">Search Packages</button>
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
								<!-- END: HOLIDAYS -->

								<!-- START: CAR SEARCH -->
								<div role="tabpanel" class="tab-pane" id="taxi">
									<form >
										<div class="col-md-12 product-search-title">Search Perfect Car</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Pick Up Location</label>
											<div class="input-group">
												<input type="text" name="departure-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Drop Off Location</label>
											<div class="input-group">
												<input type="text" name="destination-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Pick Up Date</label>
											<div class="input-group">
												<input type="text" id="car_start" class="form-control" placeholder="MM/DD/YYYY">
												<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Pick Off Date</label>
											<div class="input-group">
												<input type="text" id="car_end" class="form-control" placeholder="MM/DD/YYYY">
												<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Car Brnad(Optional)</label><br>
											<select class="selectpicker" name="brand">
												<option>BMW</option>
												<option>Audi</option>
												<option>Mercedes</option>
												<option>Suzuki</option>
												<option>Honda</option>
												<option>Hyundai</option>
												<option>Toyota</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Car Type(Optional)</label><br>
											<select class="selectpicker" name="car_type">
												<option>Limo</option>
												<option>Sedan</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 search-col-padding">
											<button type="submit" class="search-button btn transition-effect">Search Cars</button>
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
								<!-- END: CAR SEARCH -->

								<!-- START: CRUISE SEARCH -->
								<div role="tabpanel" class="tab-pane" id="cruise">
									<form >
										<div class="col-md-12 product-search-title">Cruise Holidays</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>From</label>
											<div class="input-group">
												<input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>I Want To Go</label>
											<div class="input-group">
												<input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
												<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Starting From</label>
											<div class="input-group">
												<input type="text" id="cruise_start" class="form-control" placeholder="DD/MM/YYYY">
												<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Duration(Optional)</label><br>
											<select class="selectpicker" name="holiday_duration">
												<option>3 Days</option>
												<option>5 Days</option>
												<option>1 Week</option>
												<option>2 Weeks</option>
												<option>1 Month</option>
												<option>1+ Month</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Package Type(Optional)</label><br>
											<select class="selectpicker" name="package_type">
												<option>Group</option>
												<option>Family</option>
												<option>Individual</option>
												<option>Honeymoon</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-4 search-col-padding">
											<label>Budget(Optional)</label><br>
											<select class="selectpicker" name="package_budget">
												<option>500</option>
												<option>1000</option>
												<option>1000+</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 search-col-padding">
											<button type="submit" class="search-button btn transition-effect">Search Cruises</button>
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
								<!-- END: CRUISE SEARCH -->

							</div>
							<!-- END: TAB PANE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END: SEARCH SECTION -->

			<!-- START: PRODUCT SECTION-->
			
			<!-- END: PRODUCT SECTION -->

			<!-- BEGIN: TOP DESTINATION SECTION -->
			<section id="home-top-destination">
				<div class="row image-background">
					<div class="td-overlay">
						<div class="container">
							<div class="light-section-title text-center">
								<h2>DESTINASI TERBAIK</h2>
								<h4>EXPLORE</h4>
								<div class="space"></div>
								<p>
									Kami sangat merekomendasikan untuk pengunjung yang ingin berlibur  <br>
								</p>
							</div>
							<div class="col-md-10 col-md-offset-1 on-top clear-padding">
								<div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
									<img src="assets/images/Pesona-pariwisata-Indonesia.jpg" alt="cruise">
									<div class="overlay">
										<div class="wrapper">
											<h5>BALI</h5>
											<h3><span>PULAU BALI</span></h3>
											<p>pulau bali adalah tujuan para wisata asing maupun lokal .</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
									<img src="assets/images/526-ed094a694f71-76a35c63073d9aa0dbaf627e98114043.jpg" alt="cruise">
									<div class="overlay">
										<div class="wrapper">
											<h5>NTB</h5>
											<h3><span>RAJA AMPAT</span></h3>
											<p>disebelah barat indonesia ada surga yang tersembunyi yaitu raja ampat.</p>
										</div>
									</div>
								</div>
								<div class="clearfix visible-md-block"></div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END: TOP DESTINATION SECTION -->

	
						<!-- BEGIN: TAB PANELS -->
						<!-- BEGIN: HOW IT WORK -->
<section id="how-it-work">
		<div class="row work-row">
			<div class="container">
				<div class="section-title text-center">
					<h2>BAGAIMANA CARA MEMESAN?</h2>
					<h4>CARI - PILIH - PESAN</h4>
					<div class="space"></div>
					<p>
						SKY AIRLINES adalah sebuah website yang menyediakan E-TIKET atau pemesanan tiket pesawat online.<br>
						Harga dijamin pas dan hemat tidak membuat kantong anda bolong
					</p>
				</div>
				<div class="work-step">
					<div class="col-md-4 col-sm-4 first-step text-center">
						<i class="fa fa-search"></i>
						<h5>CARI</h5>
						<p>Carilah penerbangan anda .</p>
					</div>
					<div class="col-md-4 col-sm-4 second-step text-center">
						<i class="fa fa-heart-o"></i>
						<h5>PILIH</h5>
						<p>Pilih penerbangan anda.</p>
					</div>
					<div class="col-md-4 col-sm-4 third-step text-center">
						<i class="fa fa-shopping-cart"></i>
						<h5>PESAN</h5>
						<p>Pesan penerbangan anda.</p>
					</div>
				</div>
			</div>
		</div>
</section>

			<!-- START: WHY CHOOSE US SECTION -->
			<section id="why-choose-us">
				<div class="row choose-us-row">
					<div class="container clear-padding">
						<div class="light-section-title text-center">
							<h2>KENAPA HARUS MEMESAN DI SKY AIRLINES?</h2>
							<div class="space"></div>
							<p>
								Di situs ini tersedia layanan pemesanan tiket yang memudahkan anda dalam booking tiket pesawat dibawah ini keunggulan dari sky airlines
							</p>
						</div>
						<div class="col-md-4 col-sm-4 wow slideInLeft">
							<div class="choose-us-item text-center">
								<div class="choose-icon"><i class="fa fa-money"></i></div>
								<h4>Harga Jujur </h4>
								<p>Di Sky Airlines harga terjangkau dan anda dapat menghemat uang</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 wow slideInUp">
							<div class="choose-us-item text-center">
								<div class="choose-icon"><i class="fa fa-phone"></i></div>
								<h4>Customer Care</h4>
								<p>Dan apabila anda ada masalah silahkan customer care kami .</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 wow slideInRight">
							<div class="choose-us-item text-center">
								<div class="choose-icon"><i class="fa fa-search"></i></div>
								<h4>Pencarian</h4>
								<p>Dengan ada menu pencarian dapat memudahkan anda dalam mencari tujuan keberangkatan</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END: WHY CHOOSE US SECTION -->

			<!-- START: HOT  DEALS -->
			
		<!-- END: HOT DEALS -->

		<!-- START: FOOTER -->
		<?php
include "page/footer.php";
		?>
	<!-- END: SITE-WRAPPER -->
	<!-- Load Scripts -->

	<script>
		function cekJenis(){
			if(document.getElementById('metode').value == "One Way"){
				document.getElementById('return_date').disabled = true;
			} else {
				document.getElementById('return_date').disabled = false;
			}
		}
	</script>  
	<script src="assets/js/respond.js"></script>
	<script src="assets/js/jquery.js"></script>



	<script src="assets/plugins/owl.carousel.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/plugins/wow.min.js"></script>
	<script type="text/javascript" src="assets/plugins/supersized.3.1.3.min.js"></script>
	<script src="assets/js/js.js"></script>
	<!--JAVASCRIPT-->
	<!--=================================================-->





	<!--NiftyJS [ RECOMMENDED ]-->
	<script src="private/js/nifty.min.js"></script>




	<!--=================================================-->

	<!--Demo script [ DEMONSTRATION ]-->


	<!--Switchery [ OPTIONAL ]-->
	<script src="plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>




	<!--Chosen [ OPTIONAL ]-->
	<script src="plugins/chosen/chosen.jquery.min.js"></script>



	<!--Select2 [ OPTIONAL ]-->

	<!--Form Component [ SAMPLE ]-->
	<script src="private/js/demo/form-component.js"></script>



</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:39:50 GMT -->
</html>
<?php  } else{ include 'login.php';}?>
