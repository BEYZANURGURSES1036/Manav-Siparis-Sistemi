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
<html>
<head><meta charset="utf-8">
<style>

    body{
        background-color: wheat;
        font-weight: bold;
        text-align: center;
        color: purple;
    }
</style>
</head>
<body>
<?php
include "baglan.php";
extract($_POST);
if( (isset($UrunAdi) && isset($SonKullanmaTarihi) && isset($Market) )){
$UrunAdi=$_POST['UrunAdi'];
$SonKullanmaTarihi=$_POST['SonKullanmaTarihi'];    
$Market=$_POST['Market'];
$sql = "INSERT INTO Urunler (UrunAdi,SonKullanmaTarihi,Market) 
            VALUES ( '$UrunAdi','$SonKullanmaTarihi', '$Market')";
$cevap = mysqli_query( $baglanti,$sql);  
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "ÜRÜN SİSTEME EKLENDİ";
    echo "</br></br> <a href='anasayfa.php'>ANASAYFA</a>";
}
mysqli_close($baglanti);
}
?>
</body>
</html>
