<?php
$nilai = 'yohanes';
$nilai2 = 'yohanes mayones';

setcookie("username",$nilai);
setcookie("fullname",$nilai2, time()+3600);
echo "<h1>Ini halaman pengset cookiess</h1>";
echo "<h2> <a href='cookie02.php'>klik untuk verify cookiess</a>";
?>