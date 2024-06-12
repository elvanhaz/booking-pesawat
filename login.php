<?php
      session_start();
      include "koneksi.php";  

if  (@$_SESSION['username'])
    {
      header("location:  index-3.php");
  } 
else if(@$_SESSION['level'])
    {
    header("location:  index-3.php");
  }       

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 11:22:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Sky Airlines.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	
	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
			</figure>
            <form class="form" method="post" autocomplete="off" action="proses-login.php" id="form_login">
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="divide"><span>Or</span></div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" max="15" onKeyUp="return checkInput(this);" required="" class="form-control" name="username" id="username">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" required="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
                <button type="submit"  class="btn btn-primary btn-link btn-wd btn-lg">Klik Saya</button>
				<div class="text-center add_top_10">Tidak Punya Akun? <strong><a href="register.html">Daftar Sekarang!</a></strong></div>
			</form>
			<div class="copy">© 2018</div>
		</aside>
	</div>
	<!-- /login -->
		  <!--JAVASCRIPT-->
    <!--=================================================-->
        <audio id="klik" src="private/assets/audio/klik.mp3"></audio>
    <audio id="success" src="private/assets/audio/success.mp3"></audio>
    <audio id="error" src="private/assets/audio/error.wav"></audio>
        <script src="private/assets/js/sweetalert.js"></script>
       <script src="private/js/jquery.min.js"></script>


<script>
        $(document).ready(function(){

            function error()
            {
                document.getElementById('error').play();    
            }  

            function success()
            {
                document.getElementById('success').play();  
            }
            $('#form_login').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:$(this).attr('action'),
                    method:$(this).attr('method'),
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    processData: false,                 
                    beforeSend: function(){
                        $('#pesan').html('<b>Uploading...</b>');
                    },
                    success: function(data)
                    {
                        if(data.hasil == true)
                        {
                             success();
                      swal({
                       title: 'Selamat Datang',
                                icon: 'success',
                        text  : data.pesan, 
                      });
                window.setTimeout(function(){ 
window.location.assign('index-3.php');
    } ,2000);
                        }
                        else
                        {
                            error();
                            swal({
                                title: 'Gagal',
                                icon: 'error',
                                text: data.pesan
                            });
                        }
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
       function checkInput(obj) 
                        {
                            var pola = "^";
                            pola += "[a-zA-Z1-9]*";
                            pola += "$";
                            rx = new RegExp(pola);
                         
                            if (!obj.value.match(rx))
                            {
                                if (obj.lastMatched)
                                {
                                    obj.value = obj.lastMatched;
                                }
                                else
                                {
                                    obj.value = "";
                                }
                            }
                            else
                            {
                                obj.lastMatched = obj.value;
                            }
                        }
                      </script>
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- COLOR SWITCHER  -->
	<script src="js/switcher.js"></script>
	<div id="style-switcher">
		<h6>Color Switcher <a href="#"><i class="ti-settings"></i></a></h6>
		<div>
			<ul class="colors" id="color1">
				<li><a href="#" class="default" title="Default"></a></li>
				<li><a href="#" class="aqua" title="Aqua"></a></li>
				<li><a href="#" class="green_switcher" title="Green"></a></li>
				<li><a href="#" class="orange" title="Orange"></a></li>
				<li><a href="#" class="blue" title="Blue"></a></li>
				<li><a href="#" class="beige" title="Beige"></a></li>
				<li><a href="#" class="gray" title="Gray"></a></li>
				<li><a href="#" class="green-2" title="Green"></a></li>
				<li><a href="#" class="navy" title="Navy"></a></li>
				<li><a href="#" class="peach" title="Peach"></a></li>
				<li><a href="#" class="purple" title="Purple"></a></li>
				<li><a href="#" class="red" title="Red"></a></li>
				<li><a href="#" class="violet" title="Violet"></a></li>
			</ul>
		</div>
	</div>
  
</body>

<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 11:22:08 GMT -->
</html>