<?php
if(isset($_GET['nama']) AND isset($_GET['email'])){
	$nama =$_GET['nama'];
	$email =$_GET['email'];
}
else{
	echo "Maaf,anda harus mengakses dari form02.html";
}
if (!empty($nama)){
	echo "Nama:$nama <br/> Email:$email";
}
else{
	die("Maaf,anda harus mengisi nama");
}
?>