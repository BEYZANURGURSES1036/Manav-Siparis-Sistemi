<?php
$server = 'localhost';
$user = '284274';
$password = 'PHPMYSQL';
$database = '284274';
// Create connection
$baglanti = mysqli_connect($server, $user, $password, $database);
// Check connection
if (!$baglanti) {
    echo "Mysql sunucusu ile baglantı kurulamadı"; 
    echo  mysqli_connect_error();
    exit;
}
else{
}
?>