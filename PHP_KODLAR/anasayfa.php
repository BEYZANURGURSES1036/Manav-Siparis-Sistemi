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
  <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
  <title>Manav Sipariş Sistemi</title>
  <style>
      
      body{
            font-family: 'Times New Roman', Times, serif;
            background: url(anasayfa.jpg) no-repeat center  fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: white;
            font-weight: bold;
        }
        h1{
          text-align: center;
          color: #ffe1ff;
          font-style: italic;
          margin-top: 20px;
          padding: 5px;
        }
        input{
           border-radius: 3px;
        }
        h2{
           color: #00f5ff;
           font-style: italic;
        }
        table{
             background-color: #ffe1ff ;
             color: black;
         } 
         a:hover{
            background-color: salmon;
         }
         a:link{
            color: #00f5ff;
         }
         a:visited{
            color:#00f5ff;
         }
        
   </style>
  <body>
   <center> 
    <h1>  MANAV SİPARİŞ SİSTEMİNE HOŞGELDİNİZ <br /><br /> </h1>
      <h2>ÜRÜN EKLEME</h2>
      <form action="urunekle.php" method="POST"> 
         ÜRÜN ADI   : <input type="text" name="UrunAdi" /> <br />  <br /> 
         SON KULLANMA TARİHİ: <input type="date" name="SonKullanmaTarihi" /> <br />  <br /> 
         ÜRÜNÜN BULUNDUĞU MARKET : <input type="text" name="Market" /> <br />  <br /> 
         <input type="submit" value="KAYDET"/> 
      </form><br/><br/>
  <h2>SİSTEMDEKİ ÜRÜNLERİ LİSTELEME</h2>
  <form action="urunlistele.php" method="POST"> 
         <input type="submit" value="LİSTELE"/> 
      </form><br/><br/>
      <h2>SİSTEMDEKİ MARKETLERİ LİSTELEME</h2>
  <form action="marketlistele.php" method="POST"> 
         <input type="submit" value="LİSTELE"/> 
      </form><br/><br/>
<h2>ÜRÜN SİLME</h2>
<?php
include ("baglan.php");
session_start(); 
$sql = "SELECT * FROM Urunler";
$cevap = mysqli_query($baglanti,$sql);     
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
echo "<table border=1>";
echo "<tr><th>ÜRÜN NO</th><th>ÜRÜN ADI</th><th>SON KULLANMA TARİHİ</th><th>BULUNDUĞU MARKET</th></tr>";
while($gelen=mysqli_fetch_array($cevap))
{
  echo "<tr><td>".$gelen['UrunID']."</td>";
  echo "<td>".$gelen['UrunAdi']."</td>";
  echo "<td>".$gelen['SonKullanmaTarihi']."</td>";
  echo "<td>".$gelen['Market']."</td>";
  echo "<td><a href=urunsil.php?UrunID=".$gelen['UrunID'].">Sil</a></td></tr>";    
}
echo "</table>";
mysqli_close($baglanti);
?><br/><br/>
<h2>ÜRÜN GÜNCELLEME</h2>
<?php
//mysql baglanti kodunu ekleme
include "baglan.php";
session_start(); 
//sorguyu hazirlama
$sql = "SELECT * FROM Urunler";

//sorguyu veritabanina gönderme
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdirma
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
  //sorgudan gelen tüm kayitlari tablo içinde yazdirma
//önce tablo başlıkları oluşturma
echo "<table border=1>";
echo "<tr>";
echo "<th> Urun No</th>";
echo "<th>ÜRÜN ADI</th>";
echo "<th>SON KULLANMA TARİHİ</th>";
echo "<th>BULUNDUĞU MARKET</th>";
echo "</tr>";
//veritabanından gelen cevabı satır satır alma
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelenlerle tablo satırları oluşturma
  echo "<tr><td>".$gelen['UrunID']."</td>";
  echo "<td>".$gelen['UrunAdi']."</td>";
  echo "<td>".$gelen['SonKullanmaTarihi']."</td>";
  echo "<td>".$gelen['Market']."</td>";
  echo "<td><a href=urunguncelle.php?UrunID=" .$gelen['UrunID'];
  echo ">Güncelle</a></td></tr>";    
}
}
// tablo kodunu bitirme
echo "</table>";
mysqli_close($baglanti);
?><br/><br/>
<h2>SİPARİŞ VERME</h2>
<?php
//mysql baglanti kodunu ekleme
include "baglan.php";
session_start(); 
//sorguyu hazirlama
$sql = "SELECT * FROM Urunler";

//sorguyu veritabanina gönderme
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdirma    
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
//sorgudan gelen tüm kayitlari tablo içinde yazdirma
//önce tablo başlıkları oluşturma
echo "<table border=1>";
echo "<tr>";
echo "<th> Urun No</th>";
echo "<th>ÜRÜN ADI</th>";
echo "<th>SON KULLANMA TARİHİ</th>";
echo "<th>BULUNDUĞU MARKET</th>";
echo "</tr>";
//veritabanından gelen cevabı satır satır alma
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelenlerle tablo satırları oluşturma
  echo "<tr><td>".$gelen['UrunID']."</td>";
  echo "<td>".$gelen['UrunAdi']."</td>";
  echo "<td>".$gelen['SonKullanmaTarihi']."</td>";
  echo "<td>".$gelen['Market']."</td>";
  echo "<td><a href=urunsiparis.php?UrunAdi=" .$gelen['UrunAdi'];
  echo ">Sipariş Ver</a></td></tr>";    
}
}

// tablo kodunu bitirme
echo "</table>";
mysqli_close($baglanti);
?>
      <h2><a  href='cikis.php'>OTURUMU KAPAT</a></h2> 
</center>      </body>    
</html>