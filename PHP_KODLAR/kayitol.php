<?php

include "baglan.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAYIT OL</title>
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
    <h2>MANAV SİPARİŞ SİSTEMİNE KAYIT</h2>   
    <form action="_kayitol.php"  method="POST">
    MÜŞTERİ ADI : <input type="text" name="MusteriAdi"><br/><br/>
    MÜŞTERİ SOYADI : <input type="text" name="MusteriSoyadi"><br/><br/>
    ŞİFRE :  <input type="password" name="Sifre"><br/><br/>
    TELEFON : <input type="text" name="Telefon"><br/><br/>
    ADRES : <input rows="5" cols="30" name="Adres"></input><br/><br/>
    <input type="submit" value="KAYDET">
    </form>
    </center>
</body>
</html>
