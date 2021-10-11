<!DOCTYPE html>
<head>
<title>PHPPPPPPPPPP</title>
</head>
<link rel="stylesheet" href="ooo.css"/>
<body>
<h2 style="color:gray">PHPPPPP 3(Array(foreach))</h2>

<?php
$nama = array('sastra lawas'=>'yohanes','sastra modern'=>'rocky','sastra purba'=>'gerung');
foreach ($nama as $key =>$isi){
echo "jurusan mahasiswa $isi adalah $key";
echo "<br/>";
}
?>

</body>
</html>