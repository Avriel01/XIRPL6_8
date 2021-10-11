<!DOCTYPE html>
<head>
<title>PHPPPP 2</title>
<link rel="stylesheet" href="ooo.css">
</head>
<body>
 <h2 style="color:green">PHPPPP 2(date and nest loop)</h2>
 <?php 
 date_default_timezone_set('Asia/Jakarta');
 echo date('d-m-Y H:i:s');
 
 
 for($i =0;$i<6;$i++){
	  for($o = 0; $o < $i; $o++){
			echo" * ";
	  }
	  echo "<br/>";
 }
 
 
 ?>
</body>
</html>