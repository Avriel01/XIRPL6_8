<?php session_start();

echo " Nama Anda Adalah ".$_SESSION['nama'];
echo "<br/><a href='Session01.php'>Kembali ke hal pertama</a>";