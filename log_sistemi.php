\<?php
// 1. Zaman dilimini ayarla
date_default_timezone_set('Europe/Istanbul');

// 2. Fonksiyonu Tanımla
function ziyaretciKaydet() {
    $dosya_adi = "ziyaretciler.txt";
    
    // Ziyaretçi bilgilerini al
    $ip = $_SERVER['REMOTE_ADDR'];
    $tarayici = $_SERVER['HTTP_USER_AGENT'];
    $zaman = date('d.m.Y H:i:s');
    $sayfa = $_SERVER['REQUEST_URI'];

    // Tarayıcıyı sadeleştir
    if (strpos($tarayici, 'Chrome') !== false) $cihaz = "Chrome";
    elseif (strpos($tarayici, 'Firefox') !== false) $cihaz = "Firefox";
    else $cihaz = "Mobil/Diger";

    // Kayıt metni
    $kayit_metni = "[$zaman] Sayfa: $sayfa | IP: $ip | Cihaz: $cihaz" . PHP_EOL;

    // Dosyaya yaz (FILE_APPEND ile üstüne ekleme yap)
    file_put_contents($dosya_adi, $kayit_metni, FILE_APPEND);
}

// 3. TOPLAM SAYIYI DÖNDÜREN FONKSİYON
function toplamZiyaretciSayisi() {
    $dosya_adi = "ziyaretciler.txt";
    if (file_exists($dosya_adi)) {
        $satirlar = file($dosya_adi);
        return count($satirlar);
    }
    return 0;
}

// 4. KRİTİK ADIM: Fonksiyonu burada otomatik çalıştırıyoruz!
// Bu dosya hangi sayfaya dahil edilirse (include) direkt kayıt tutar.
ziyaretciKaydet();
?>