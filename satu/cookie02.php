<?php
if(isset($_COOKIE['username'])){
	echo "<h1>Cookie 'username' ada. isinya : ".$_COOKIE
	['username']."</h1>";
} else{
	echo "<h1>cookiess 'username' gaada</h1>";
 }
if(isset($_COOKIE['fullname'])){
    echo "<h1>Cookie 'fullname' ada. isinya : ".$_COOKIE
	['fullname']."</h1>";
} else{
	echo "<h1>cokiess 'fullname' gaada </h1>";
 }
echo "<h1><a href='cookie.php'>klik untuk buat cookiess</a>";
?>