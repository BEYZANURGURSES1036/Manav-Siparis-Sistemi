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
    <title>Sipariş</title>
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
    extract($_POST);
    $UrunAdi=$_GET['UrunAdi'];
    $sql2="SELECT * FROM Urunler WHERE UrunAdi= '$UrunAdi' ";
$cevap2 = mysqli_query($baglanti,$sql2);     
if(!$cevap2 ){
    echo '<br>Hata:' . mysqli_error($baglanti);
    exit();
}
$gelen=mysqli_fetch_array($cevap2);
    ?>
   <h2>ÜRÜN SİPARİŞ VERME</h2> 
<form action=" <?php $_PHP_SELF ?>" method="POST">
ÜRÜN ADI : <input type="text" name="UrunAdi" value="<?php echo $gelen['UrunAdi']; ?> "/>   <br /><br />  
ALIŞ TARİHİ : <input type="date" name="AlisTarihi" />    <br /><br />
TESLİM TARİHİ : <input type="date" name="TeslimTarihi" />  <br /><br />
<input type="submit" value="KAYDET"/>
</form>
</body>
</html>
<?php
include "baglan.php";
extract($_POST);
if( (isset($AlisTarihi) && isset($TeslimTarihi) )){
$AlisTarihi=$_POST['AlisTarihi'];
$TeslimTarihi=$_POST['TeslimTarihi'];
$sql = "INSERT INTO siparisler (AlisTarihi,TeslimTarihi) VALUES ( '$AlisTarihi','$TeslimTarihi')";
$cevap = mysqli_query($baglanti,$sql);
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "SİPARİŞ ALINDI !";
    echo " </br></br></br><a href='anasayfa.php'> ANASAYFA</a>";
}
}
?>