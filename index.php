<?php
session_start();
// Güvenlik: Giriş yapmayan kullanıcıyı login.php'ye geri atar
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda | Murad Osmanli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Web Projesi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="index.php">Hakkında</a>
                    <a class="nav-link" href="cv.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                    <a class="nav-link text-danger fw-bold" href="logout.php">Çıkış</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Merhaba, Ben Murad Osmanli</h1>
                        <p class="col-md-8 fs-4 text-muted">Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim. Web teknolojileri üzerine kendimi geliştiriyorum.</p>
                        <hr class="my-4">
                        <p>Bu proje benim ilk kapsamlı web geliştirme deneyimimdir. Giriş sisteminden, dinamik sayfa yapılarına kadar birçok yapıyı barındırmaktadır.</p>
                        <a href="cv.php" class="btn btn-primary btn-lg">Özgeçmişimi Gör</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Murad Osmanli - Web Teknolojileri</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>