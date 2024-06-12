<?php
include 'koneksi.php';

if (isset($_POST['submit'])) 
{
	$email			= $_POST['email'];
	$username 			= addslashes(strip_tags($_POST['username']));
	$password 			= $_POST['password'];
	$password_confirm	= $_POST['password_confirm'];

	if (strlen($username) > 10) 
	{
		echo "<script>alert('Username tidak boleh lebih dari 10 karakter !!!');document.location.href='register'</script>/n";
	}else{
		if ($password == $password_confirm) 
		{
			$sql_get  = mysqli_query($conn, "SELECT * FROM penumpang WHERE username = '$username' ");
			$num_rows = mysqli_num_rows($sql_get);

			if ($num_rows == 0) 
			{
				$password 			= md5($password);
				$password_confirm	= md5($password_confirm);
				$insert = mysqli_query($conn, "INSERT INTO penumpang VALUES ('','$email','$username','$password','$password_confirm','','','','','user')");
				if ($insert == TRUE) 
				{
					echo "<script>alert('Register Berhasil !!!');document.location.href='register.php'</script>/n";
					session_start();
					session_destroy();
				}else{
					echo "<script>alert('Register Gagal !!');document.location.href='register.php'</script>/n";
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