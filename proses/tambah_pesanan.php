<?php
	include '../konek.php';
	session_start();
		$kode_pemesanan = $_POST['kode_pemesanan'];
		$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
		$tempat_pemesanan = $_POST['tempat_pemesanan'];
		$kode_kursi = $_POST['kode_kursi'];
		$id_rute = $_POST['id_rute'];
		$tujuan = $_POST['tujuan'];
		$tanggal_berangkat = $_POST['tanggal_berangkat'];
		$jam_cekin = $_POST['jam_cekin'];
		$jam_berangkat = $_POST['jam_berangkat'];
		$total_bayar = $_POST['total_bayar'];
		$id_pelanggan = $_SESSION['id_penumpang'];

		//id meja dari session
			$query = $conn->query("INSERT INTO pemesanan VALUES(NULL, '$kode_pemesanan', '$tanggal_pemesanan',  '$tempat_pemesanan', '$id_pelanggan', '$kode_kursi', '$id_rute', '$tujuan', '$tanggal_berangkat', '$jam_cekin', '$jam_berangkat', '$total_bayar',  'Proses', '20')");
			if ($query) {
					$data['hasil'] = true;
					$data['pesan'] = 'Berhasil';
				
			}else{
				$data['pesan'] = 'gagal';

		}

	

	echo json_encode($data);
?>
