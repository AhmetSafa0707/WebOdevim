<?php
// Formdan gelen verileri alın
$isimKullanici = $_POST["kullaniciIsmi"] ?? '';
$soyIsimKullanici = $_POST["kullaniciSoyIsmi"] ?? '';
$mailKullanici = $_POST["kullaniciMail"] ?? '';
$cinsiyetKullanici = $_POST["kullaniciCinsiyet"] ?? '';
$inputHobiler = $_POST["inputHobiler"] ?? [];
$mesajInput = $_POST["mesajInput"] ?? '';

// Verileri ekrana yazdır
echo "<h2>Gönderilen Bilgiler:</h2>";
echo "<p>Ad: $isimKullanici</p>";
echo "<p>Soyad: $soyIsimKullanici</p>";
echo "<p>E-posta: $mailKullanici</p>";
echo "<p>Cinsiyet: $cinsiyetKullanici</p>";
echo "<p>Hobiler: ";
if (is_array($inputHobiler)) {
    echo implode(", ", $inputHobiler);
} else {
    echo $inputHobiler;
}
echo "</p>";
echo "<p>Mesaj: $mesajInput</p>";

// Hakkımda sayfasına yönlendirme linki
echo '<a href="hakkimda.html">Hakkımda Sayfasına Git</a>';
?>