<?php

//cek apakah user sudah login
if (!isset($_SESSION['admin']) && !isset($_SESSION['pegawai'])) {
	
   echo "<script type=text/javascript>  
alert('Anda Belum Login :) , Silahkan Login dan Dilarang mengakses langsung');  
window.location = 'login-page.php';  
</script>";
//	header('location:login.php');
}


?>