<?php
include 'koneksi.php';

if (isset($_POST['submit'])) 
{
date_default_timezone_set("Asia/Jakarta");
$pass= '1A2B4HTjsk5kwhadbwlf'; $panjang='10'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);

	$email			= $_POST['email'];
	$username 			= addslashes(strip_tags($_POST['username']));
	$password 			= $_POST['password'];
	$password_confirm	= $_POST['password_confirm'];
		$alamat_penumpang	= $_POST['alamat_penumpang'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$telefone	= $_POST['telefone'];


	if (strlen($username) > 10) 
	{
		echo "<script>alert('Username tidak boleh lebih dari 10 karakter !!!');document.location.href='register'</script>/n";
	}else{
		if ($password == $password_confirm) 
		{
			$sql_get  = mysqli_query($conn, "SELECT * FROM penumpang WHERE username = '$username' ");
			$num_rows = mysqli_num_rows($sql_get);

			if ($email) 
		{
			$sql_get  = mysqli_query($conn, "SELECT * FROM penumpang WHERE email = '$email' ");
			$num_rows = mysqli_num_rows($sql_get);

			if ($num_rows == 0) 
			{
				$password 			= md5($password);
				$password_confirm	= md5($password_confirm);
				$insert = mysqli_query($conn, "INSERT INTO penumpang VALUES ('','$email','$username','$password','$password_confirm','$alamat_penumpang','$tanggal_lahir','$jenis_kelamin','$telefone','','Blokir','','user')");
				if ($insert == TRUE) 
				{
				$to = "$email"; 
$subject = "Verifikasi Akun"; 
$message = " 
<html>  
<head> 
<title>Verification Akun</title> 
</head> 
<body> 
<p>Terimakasih Telah Bergabung,  
Username Anda: '.$username.'
Silahkan klik link disamping untuk verifikasi <a href='http://localhost/light/active.php?ref=$email'>Verifikasi<a></p> 
</body> 
</html> 
"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: <imanelvanhaz@gmail.com>' . "\r\n"; 
mail($to,$subject,$message,$headers); 
if ($insert) {
					echo "<script>alert('Silahkan Check Email untuk verifikasi !!');document.location.href='register.php'</script>/n";
				}
				}else{
					echo "<script>alert('Register Gagal !!');document.location.href='register.php'</script>/n";
				}

			}else{
					echo "<script>alert('Email sudah digunakan !!!');document.location.href='register'</script>/n";
				}

			}else{
					echo "<script>alert('Username sudah digunakan !!!');document.location.href='register'</script>/n";
				}
		}else{
				echo "<script>alert('Password yang Anda masukan tidak sama !!!');document.location.href='register'</script>/n";
			}
	}
}else{
	echo "<script>alert('Anda belum mengisi Formulir !!!');document.location.href='register'</script>/n";
}
?>