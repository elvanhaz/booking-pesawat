    <?php
session_start();

include '../koneksi.php';


if (isset($_POST['submit'])) 
{
  $username = addslashes(trim($_POST['username']));
  $password =  md5( $_POST['password']);

  $query = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' AND password='$password' ");
  if (mysqli_num_rows($query) == 0) 
  {
    echo "<script>alert('Username atau Password yang Anda masukan salah !!!');document.location.href='login'</script>/n";
  }else{
    $row = mysqli_fetch_assoc($query);
    $_SESSION['usernameuser'] = mysql_real_escape_string ($row['username']);
    $_SESSION['1']  = $row['1'];
    
     if($row >= 1)
          {
             $_SESSION["id_petugas"]= $row['id_petugas'];                
                   if($row ['id_level'] =="1" )
              {
                       @$_SESSION['1'] = $row['id_petugas'];
      echo "<script>alert('Selamat Datang !');document.location.href='index'</script>/n";
                    } 
        }else{
                      ?> 
              <script type="text/javascript">alert("Masuk gagal, Nama Dan Kata Sandi Anda Salah. Silahkan Coba Lagi");</script>
                      <?php 
          }
            }
        }
?>