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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Silme</title>
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
//mysql baglanti kodunu ekliyoruz
include "baglan.php" ;
session_start();
//sorguyu hazirliyoruz
$UrunID= $_GET['UrunID'];
$sql = "DELETE FROM Urunler WHERE UrunID= '$UrunID'";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
       
if($cevap )
{
    echo "KAYIT SİLİNDİ !</br></br>";
    echo " <a href='anasayfa.php'> ANASAYFA</a>";
}
else
{
    echo '<br>Hata:' . mysqli_error($baglanti);

}
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
 
</body>
</html>
   
