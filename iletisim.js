function validateForm() {
  var ad = document.getElementById("kullaniciIsmi").value;
  var soyad = document.getElementById("kullaniciSoyIsmi").value;
  var mail = document.getElementById("kullaniciMail").value;
  var sifre = document.getElementById("kullaniciSifre").value;

  var sonucDiv = document.getElementById("sonuc");
  sonucDiv.innerHTML = ""; // Önceki sonuçları temizle

  // Ad, soyad, mail ve şifre alanlarının boş olup olmadığını kontrol et
  if (ad == "" || soyad == "" || mail == "" || sifre == "") {
    sonucDiv.innerHTML = "Lütfen tüm alanları doldurun.";
    return;
  }

  // E-posta formatını kontrol et
  var emailRegex = /^[a-zA-Z0-9._-]+@sakarya\.edu\.tr$/;
  if (!emailRegex.test(mail)) {
    sonucDiv.innerHTML = "Geçerli bir sakarya.edu.tr e-posta adresi girin.";
    return;
  }

var nameRegex = /^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/;
  if (!nameRegex.test(ad) || !nameRegex.test(soyad)) {
    sonucDiv.innerHTML = "Ad ve soyad alanlarına sadece harf girin.";
    return;
  }

  // Şifre en az 6 karakter olmalı
  if (sifre.length < 6) {
    sonucDiv.innerHTML = "Şifre en az 6 karakterden oluşmalıdır.";
    return;
  }

  // Tüm kontroller başarılı ise sayfaya yönlendir
  sonucDiv.innerHTML = "Tüm bilgiler doğru bir şekilde girildi.Gönder butonuna basınız.";
}