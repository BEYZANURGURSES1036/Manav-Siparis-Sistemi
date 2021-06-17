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
<head>
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
</style>
    </head>
    <body> 
 <center> 
    <h2>MARKETLER</h2> 
<?php
include "baglan.php";
$sql = "SELECT * FROM marketler";
$cevap = mysqli_query($baglanti,$sql);     
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

echo "<table border=1>";
echo "<tr><th>MARKET NO</th><th>MARKET ADI</th></tr>";
while($gelen=mysqli_fetch_array($cevap))
{
    echo "<tr><td>".$gelen['MarketID']."</td>";
    echo "<td>".$gelen['MarketAdi']."</td></tr>";    
}
echo "</table>";
mysqli_close($baglanti);

echo "</br></br><a href='anasayfa.php'> ANASAYFA</a>";
?>
</center>  
</body>
</html>