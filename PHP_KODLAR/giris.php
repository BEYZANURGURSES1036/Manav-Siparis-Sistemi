<?php
include "baglan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ</title>
    <style>
        body{
            background-color: wheat;
        }
        input{
            border-radius: 3px;
        }
        form{
            margin-top: 100px;
        }
    </style>
</head>
<body>
 <center>  
<h2>MANAV SİPARİŞ SİSTEMİNE GİRİŞ</h2>      
<form action="giris_.php" method="POST">
MÜŞTERİ ADI : <input type="text" name="MusteriAdi"></br></br></br>
MÜŞTERİ SOYADI : <input type="text" name="MusteriSoyadi"></br></br></br>
ŞİFRE : <input type="password" name="Sifre"></br></br></br>
<input type="submit" value="GİRİŞ YAP">
</form>
</center>
</body>
</html>