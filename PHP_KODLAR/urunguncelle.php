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
        <title>Ürün Güncelleme</title>
        <style>
           body{
        background-color: wheat;
        font-weight: bold;
        text-align: center;
    }
            h2{
          text-align: center;
          color: purple;
          font-style: italic;
          margin-top: 20px;
          padding: 5px;
        }
        input{
           border-radius: 3px;
        }
        form{
            text-align: center;
        }
        </style>
    </head>
    <body>
    <?php
include "baglan.php";
$UrunID=$_GET['UrunID'];
$sql = "SELECT * FROM Urunler WHERE UrunID='$UrunID'";
$cevap = mysqli_query($baglanti,$sql);     
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
$gelen=mysqli_fetch_array($cevap);
?>
<h2>Ürün Güncelleme</h2>
<form action="<?php $_PHP_SELF ?>" method="POST">
ÜRÜN ADI : <input type="text" name="UrunAdi" value="<?php echo $gelen['UrunAdi']?>" />    <br /><br />
SON KULLANMA TARİHİ : <input type="date" name="SonKullanmaTarihi" value="<?php echo $gelen['SonKullanmaTarihi'] ?>" /> <br /><br />
BULUNDUĞU MARKET : <input type="text" name="Market" value="<?php echo $gelen['Market'] ?>" />  <br /><br />
<input type="submit" value="KAYDET"/>
</form>
<?php
include "baglan.php" ;
extract($_POST);
if( (isset($UrunAdi) && isset($SonKullanmaTarihi) && isset($Market) )){
$UrunID=$_GET['UrunID'];
$sql ="UPDATE Urunler SET UrunAdi='$UrunAdi',SonKullanmaTarihi='$SonKullanmaTarihi',Market='$Market' 
        WHERE UrunID= $UrunID";
$cevap = mysqli_query( $baglanti,$sql);      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "KAYIT GÜNCELLENDİ !";
    echo " </br></br></br><a href='anasayfa.php'> ANASAYFA</a>";
}
}
mysqli_close($baglanti);
?>
</body>
    </html>
