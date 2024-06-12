    
<?php
include 'konek.php';
include 'private/lib/function.php';


  function anti_injection($data){
  $filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}

  $username =  anti_injection (addslashes(trim($_POST['username'])));
  $password =  anti_injection (md5($_POST['password']));

// menghindari sql injection
$injeksi_username = mysqli_real_escape_string($conn, $username);
$injeksi_password = mysqli_real_escape_string($conn, $password);
if (!ctype_alnum($injeksi_username) OR !ctype_alnum($injeksi_password)){
            $data['hasil'] = false;
      $data['pesan'] = 'Mode Keamanan Enabled';
    }else{       
  $query = mysqli_query($conn, "SELECT * FROM penumpang WHERE username='$username' AND password='$password' AND blokir='Aktif'");
  


        $ketemu = mysqli_num_rows($query);


    $row = mysqli_fetch_assoc($query);
    if ($ketemu > 0){
    @session_start();
    $_SESSION['username'] = $row['username'];
        $_SESSION['id_penumpang']  = $row['id_penumpang'];

    $_SESSION['level']  = $row['level'];
    
      
   // bikin id_session yang unik dan mengupdatenya agar slalu berubah 
    // agar user biasa sulit untuk mengganti password Administrator 
    $sid_lama = session_id();
    session_regenerate_id();
    $sid_baru = session_id();

    if($row['level'] == "user")
    { 
            mysqli_query($conn, "UPDATE penumpang SET id_session='$sid_baru', batas_login = 0 where username='$username'");

  }
      $data['hasil'] = true;
      $data['pesan'] = 'Berhasil';
    
    }
    else
    {

  mysqli_query($conn, "UPDATE penumpang SET batas_login = batas_login + 1 where username='$username'");
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT batas_login from penumpang where username= '$username'"));
        $cuk=$row['batas_login'];
        if($cuk > 3){
        mysqli_query($conn, "UPDATE penumpang SET blokir = 'Blokir' where username='$username'");
 $data['hasil'] = false;
      $data['pesan'] = 'username anda di blokir silahkan hubungi Administrator';
    } 
  elseif($cuk > 2){
 $data['hasil'] = false;
      $data['pesan'] = 'Kesempatan 1 kali login jika gagal akun anda kami blokir';
    }
    else{
     $data['hasil'] = false;
      $data['pesan'] = 'username dan password salah ';
    }
    
  }

  }
        echo json_encode($data);


?>
