<?PHP 
include "../email.php";
$host = "localhost";
$user = "root";
$pass = "";
$namadb = "db_tiket";

$conn = mysqli_connect($host, $user, $pass, $namadb);
if (!$conn) 
{
		die("Connection Failed : ". mysqli_connect_error() );
}
///////////////////////////////////////////////////////////////////////
if (isset($_POST['lupa_password'])) {

date_default_timezone_set("Asia/Jakarta");
$pass= '1A2B4HTjsk5kwhadbwlf08578@#'; $panjang='10'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);
 
$email = trim(strip_tags($_POST['email']));
$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));

 
// mencari alamat email si user
  $query = mysqli_query($conn, "SELECT * FROM petugas ORDER BY id_petugas DESC");

$query =mysqli_query($conn, "SELECT * FROM petugas WHERE email ='$email'");
$data = mysqli_fetch_assoc($query);
$cek = mysqli_num_rows($query);
$id_petugas = strip_tags($data['id_petugas']);
$alamatEmail = strip_tags($data['email']);
$password = strip_tags($data['password']);
$username =trim(strip_tags($data['username']));
if ($cek == 1) {
 
// title atau subject email
$title = "Permintaan Password Baru";
// isi pesan email disertai password


$pesan = "Kata sandi anda yang baru adalah:   <h3>".$passwordbaru."</h3>   Silahkan login dan ubah password anda  ";


// header email berisi alamat pengirim
$sender2   = 'imanelvanhaz@gmail.com';
$password2 = 'Blade371';

$sender3   = 'elvanhazi@gmail.com';
$password3 = 'Elv@nhaz371';

$sender4   = 'imanelvanhaz@gmail.com';
$password4 = 'Blade371';
// mengirim email

// cek status pengiriman email
if (email_localhost($alamatEmail, $title, $pesan, $sender2,$password2, $sender3,$password3, $sender4,$password4)) { 
// update password baru ke database (jika pengiriman email sukses)
$query = mysqli_query($conn, "UPDATE petugas SET password='$passwordbaru' WHERE id_petugas = '$id_petugas'");
 
if ($query) 
        echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
'.$pesan.'<hr>';
}		
else {
 $data['hasil'] = false;
        $data['pesan'] = 'Pengiriman email gagal mohon coba lagi';}
}
else{
 
 $data['hasil'] = false;
        $data['pesan'] = 'Mohon maaf alamat email anda tidak ada';}}

  echo json_encode($data);

        ?>