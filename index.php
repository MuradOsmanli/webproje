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
    <style>
        .jumbotron-custom { 
            background: white; 
            border-radius: 15px; 
            padding: 3rem; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
        }
        .nav-link { transition: 0.3s; }
        .nav-link:hover { color: #ffc107 !important; transform: translateY(-2px); }
        footer { margin-top: auto; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">SAÜ | WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="index.php">Hakkında</a>
                    <a class="nav-link" href="cv.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                    <a class="nav-link text-danger fw-bold border border-danger rounded px-3 ms-lg-3" href="logout.php">Çıkış</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 flex-grow-1">
        <div class="jumbotron-custom border">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="display-4 fw-bold text-dark">Merhaba, Ben Murad Osmanli</h1>
                    <p class="lead text-muted">Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim.</p>
                    <hr class="my-4">
                    
                    <p class="fs-5 text-secondary">
                        Web Teknolojileri dersi projesi olarak geliştirilen bu uygulama; kullanıcı kimlik doğrulama süreçleri, 
                        form validasyonları ve mobil öncelikli tasarım prensipleri göz önünde bulundurularak kodlanmıştır.
                    </p>

                    <div class="alert alert-info mt-4 border-0 shadow-sm">
                        <strong>Günün Notu (PHP):</strong> 
                        <?php 
                            $mesajlar = [
                                "Kod yazmak modern bir sanattır.", 
                                "Her yeni satır kod, yeni bir öğrenme sürecidir.", 
                                "Web teknolojileri dünyasına hoş geldin.",
                                "Hata ayıklamak (debug), öğrenmenin en hızlı yoludur."
                            ];
                            echo $mesajlar[array_rand($mesajlar)];
                        ?>
                    </div>

                    <div class="mt-4">
                        <a href="cv.php" class="btn btn-primary btn-lg px-5 shadow">Özgeçmişimi İncele</a>
                        <a href="sehrim.php" class="btn btn-outline-dark btn-lg px-5 ms-md-2 shadow-sm">Şehrimi Tanı</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Murad Osmanli - Sakarya Üniversitesi</p>
            <small class="text-secondary">Geliştirme Tarihi: 09.05.2026</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>