<?php
session_start();
include "baglan.php";
$MusteriAdi = $_POST["MusteriAdi"];
$MusteriSoyadi = $_POST["MusteriSoyadi"];
$Sifre=hash('sha256',$Sifre);
$Telefon=$_POST["Telefon"];
$Adres=$_POST["Adres"];
if(isset($MusteriAdi) && isset($MusteriSoyadi)  && isset($Sifre) && isset($Telefon) && isset($Adres)){
 $sql="INSERT INTO musteriler(MusteriAdi,MusteriSoyadi,Sifre,Telefon,Adres) VALUES('$MusteriAdi','$MusteriSoyadi','$Sifre','$Telefon','$Adres') ";
 $cevap=mysqli_query($baglanti,$sql);
 if($cevap){ 
     ?>
    <html>
    <head>
    <title>Giriş Sayfasına Yönlendirme</title> 
    <meta HTTP-EQUIV="Refresh" CONTENT="0; URL='giris.php'">
    </head>
    <body></body>
    </html>
 
<?php
} 
 else{
     echo "Kullanıcı Oluşturulamadı";
 }
}
?>