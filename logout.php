<?php
session_start();
session_destroy(); // Tüm oturumu temizle
header("Location: login.php"); // Giriş sayfasına geri gönder
exit();
?>