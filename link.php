<?php
//Berfungsi memfilter simbol-simbol agar tidak terjadi gangguan saat membuka detail berita
	$word = array("?","!","@","#","$","%","^","&","*","(",")","_","+","=","|","]","[","{","}","/",">","<");
	$output = str_replace($word, "", $data['rute_awal']);	

//berfungsi sebagai link read more
//html berfungsi sebagai pengalih url
// " 17249 "," html "harus memiliki nilai yang sama di .htaccess nya
// Contoh htaccess :
// RewriteRule ^ 17249 ([0-9]+)-(.*)\. html $ page.php?id=$1
// page.php menyesuaikan dengan file read more nya

	$judul = preg_replace("/\s/","-",$output); // Berfungsi untuk mereplace url menjadi judul artikel
	$link = "17249".$data['id_rute']."-".$judul.".com"; // Berfungsi sebagai link read more
?>