 <?php
                          include "koneksi.php";
                                      if($_POST['id_rute']) {
                                           $id_rute = $_POST['id_rute'];          
                               $query=  "SELECT * FROM rute art INNER JOIN transportasi kat JOIN type_transportasi sat  ON art.id_transportasi=kat.id_transportasi=sat.id_type_transportasi WHERE id_rute='$id_rute'";
                                $sql = mysqli_query($conn,$query);
                                while ($result = mysqli_fetch_array($sql))
                                {
		    $dewasa   = $result['dewasa'];
		    $anak   = $result['harga'];
		    $total = $anak*$dewasa

                               ?>


					<!-- START: FLIGHT MODAL -->
					<h5>DETAILS PENERBANGAN</h5>
					<div class="flight-details-book">
						<div class="col-md-2 col-sm-2 col-xs-4">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="flight-details-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#itinerary">Detail</a></li>
						<li><a data-toggle="tab" href="#fare">Harga Detail</a></li>
					</ul>
					<div class="tab-content">
						<div id="itinerary" class="tab-pane fade in active">
							<h5 class="itinerary-date"><?php echo $result['pp']; ?></h5>
							<div class="itinerary-details text-center">
								<div class="flight">
									<div class="col-md-1 col-sm-2 col-xs-3">
										<img src="assets/images/airline/vistara-2x.png" alt="cruise">
										<h6 style="margin-left: -15px;"><?php echo $result['nama']; ?></h6>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<h4><?php echo $result['jam_berangkat']; ?></h4>
										<h5><?php echo $result['rute_awal']; ?></h5>
									</div>
									<div class="col-md-1 col-sm-1 col-xs-1">
										<i class="fa fa-long-arrow-right"></i>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<h4><?php echo $result['jam_pulang']; ?></h4>
										<h5><?php echo $result['rute_akhir']; ?></h5>
									</div>
									<div class="col-md-2 col-sm-3 col-xs-2">
										<h4><?php echo $result['durasi']; ?></h4>
										<h5>0 Stop</h5>
									</div>
								</div>
								<div class="clearfix"></div>
								<div>
									<div class="col-md-6 col-sm-6 airline-facilities text-center">
										<div class="col-md-3 col-sm-3 col-xs-3">
											<i class="fa fa-cutlery"></i>
											<span>Gratis Makan</span>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-3">
											<i class="fa fa-coffee"></i>
											<span>Minum</span>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-3">
											<i class="fa fa-wifi"></i>
											<span>Free Wifi</span>
										</div>
									</div>
									<div class="clearfix-sm"></div>
									<div class="col-md-6 col-sm-6 airline-rating text-center">
										<h5>Airline Rating</h5>
										<i class="fa fa-star colored"></i>
										<i class="fa fa-star colored"></i>
										<i class="fa fa-star colored"></i>
										<i class="fa fa-star colored"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<div id="fare" class="tab-pane fade">
							<div class="col-md-8 col-sm-8">
								<h5>Details Harga</h5>
								<table>
									<tr style="margin-left: 90px">
										<td>Harga</td>
										<td style="margin-left: 90px">Rp. <?php echo number_format ($result['harga']);?></td>
									</tr>
									<tr>
										<td>Dewasa</td>
										<td>X <?php echo $result['dewasa'];?> </td>
									</tr>
									<tr>
										<td>Anak</td>
										<td>X <?php echo $result['anak'];?> </td>
									</tr>
									<tr>
										<td>Layanan</td>
										<td style="color: blue">Gratis</td>
									</tr>
									<tr>
										<td>PPN</td>
										<td style="color: blue">Termasuk</td>
									</tr>
									<tr class="grand-total">
										<td style="margin-right:  30px;">Total Harga</td>
										<td>Rp. <?php echo number_format ($total);?></td>
									</tr>
								</table>
							</div>
						</div>
					<?php
      }
      ?>
        <?php
      }
      ?>