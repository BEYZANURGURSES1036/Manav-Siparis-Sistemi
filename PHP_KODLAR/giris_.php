<?php 
   session_start(); 
   include "baglan.php"; 
   $MusteriAdi = $_POST["MusteriAdi"];
   $MusteriSoyadi = $_POST["MusteriSoyadi"];
   $Sifre=hash('sha256',$_POST["Sifre"]);    
   if (isset($MusteriAdi) && isset($MusteriSoyadi) && isset($Sifre)){ 
   // sifre metni SHA256 ile şifreleme 
   $sql = "SELECT MusteriAdi,MusteriSoyadi,Sifre FROM musteriler WHERE "; 
   $sql= $sql . "MusteriAdi='$MusteriAdi' && Sifre='$Sifre' && MusteriSoyadi='$MusteriSoyadi'"; 
   $cevap = mysqli_query($baglanti, $sql); 
   //eger cevap FALSE ise hata yazdirma       
   if(!$cevap ){    
       echo '<br>Hata:' . mysqli_error($baglanti); 
   } 
   //veritabanindan dönen satır sayısını bulma 
   $say = mysqli_num_rows($cevap); 
   if ($say == 1){ 
       $_SESSION['MusteriAdi'] = $MusteriAdi;
       $_SESSION['MusteriSoyadi']=$MusteriSoyadi;
       $_SESSION['Sifre']=$Sifre;
    }
    else{ 
   echo "<html><body style='background-color:wheat;' align=center><h2><font color= 'purple'> 
   Hatalı Kullanıcı adı veya Şifre!
   </font></h2></body></html>";  
    } 
   }   
   if ( isset( $_SESSION['MusteriAdi'])  &&  isset($_SESSION['MusteriSoyadi'])  &&  isset($_SESSION['Sifre'])){ 
    ?><html>
    <head>
    <title>Anasayfaya Yönlendirme</title> 
    <meta HTTP-EQUIV="Refresh" CONTENT="0; URL='anasayfa.php'">
    </head>
    <body></body>
    </html>
<?php
 }
   else{
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
?>