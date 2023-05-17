<?php

$kullaniciAdi = "b221210095@sakarya.edu.tr";
$sifreKullanici = "b221210095";

$mail = $_POST["kullaniciAdi"];

if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
	
    if (($kullaniciAdi==$mail) && ($_POST["sifre"]==$sifreKullanici)) {
    echo "Hoşgeldiniz ". $sifreKullanici."<br>";
    echo "<a href=hakkimda.html>Siteye Girmek İçin Tıklayınız...</a>";
    }

    else {        
    echo "Kullanıcı Adı Veya Şifre Yanlış.!!<br>";
    echo "<a href=girisyap.html>Tekrar Denemek İçin Tıklayınız...</a>";
    }
    
}

else {
    echo "Lütfen kullanıcı adını e-posta formatında giriniz.!!<br>";
    echo "<a href=girisyap.html>Tekrar Denemek İçin Tıklayınız...</a>";
}

?>