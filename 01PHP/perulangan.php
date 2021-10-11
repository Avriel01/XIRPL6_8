<!DOCTYPE html>
<head>
<title>PHP 2</title>
</head>
<body>
<h2 style="color:green"> Perulangan</h2>
<?php 
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-y H:i:s');

for($i =0;$i<6;$i++){
	for($o = 0; $o < $i; $o++){
		echo" * ";
	}
	echo "<br/>";
}
?>
</body>
</html>