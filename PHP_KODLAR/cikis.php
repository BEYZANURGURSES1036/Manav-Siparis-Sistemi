<?php
   include "baglan.php";
   session_start(); 
   if ( !(isset($_SESSION['MusteriAdi']) && isset($_SESSION['MusteriSoyadi'])  && isset($_SESSION['Sifre'])) ) { 
    echo "
    <html><body style='background-color:wheat;' align=center><h2><font color= 'purple'> 
     Sisteme giriş yapmadan veya kayıt olmadan erişim sağlayamazsınız 
     </font></h2></body></html>"; 
    ?>
    <html>
    <head>
    <title>Giriş Sayfasına Yönlendirme</title> 
    <meta HTTP-EQUIV="Refresh" CONTENT="2; URL='index.php'">
    </head>
    <body></body>
    </html>
<?php 
 exit();
}
?>
<?php

include ("baglan.php");
session_start();
session_destroy();
?>
<html>
<head>
<title>Çıkış Sayfasına Yönlendirme</title> 
<meta HTTP-EQUIV="Refresh" CONTENT="1; URL='index.php'">
</head>
<body></body>
</html>


