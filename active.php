<?php
  include'koneksi.php';

      $email = $_GET['ref'];

    $sad = $conn->query("SELECT blokir FROM penumpang WHERE blokir='Blokir'");
  
      if ($sad && mysqli_num_rows($sad) > 0) {
       $query = $conn->query("UPDATE penumpang SET blokir='Aktif' WHERE penumpang.email='$email'");

      if ($query = TRUE) {
      // Jika Sukses, Lakukan :
  echo "<script>alert('Verifikasi Berhasil Silahkan Login!!!');document.location.href='login.php'</script>/n";
      
    }else{
      // Jika Gagal, Lakukan :
  echo "<script>alert('Gagal Verifikasi!!!');document.location.href='register.php'</script>/n";
      
    }
  
}
