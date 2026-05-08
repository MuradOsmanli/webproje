<?php
session_start();
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
    <title>Şehrim | Bakü</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Resimlerin netliğini korumak ve bulanıklığı önlemek için özel ayarlar */
        .carousel-item img {
            width: 100%;
            height: 500px; /* Sabit yükseklik, taşmaları önler */
            object-fit: cover; /* Resmi sündürmeden kutuya sığdırır */
            object-position: center; /* Resmin merkezine odaklanır */
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.65); /* Yazıların arkasını biraz daha koyulaştırdık */
            border-radius: 12px;
            padding: 20px;
            bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Web Projesi</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="cv.php">Özgeçmiş</a>
                <a class="nav-link active" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link text-danger fw-bold" href="logout.php">Çıkış</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4 display-5 fw-bold text-primary">Kafkasya'nın İncisi: Bakü</h2>
        
        <div id="bakuSlider" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#bakuSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#bakuSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#bakuSlider" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/baku1.jpg" class="d-block w-100" alt="Alev Kuleleri">
        <div class="carousel-caption">
            <h4 class="fw-bold">Alev Kuleleri</h4>
            <p>Bakü'nün modern sembolü ve şehrin parlayan yüzü.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/baku2.jpg" class="d-block w-100" alt="İçerişehir">
        <div class="carousel-caption">
            <h4 class="fw-bold">İçerişehir (Old City)</h4>
            <p>UNESCO Dünya Mirası listesinde yer alan tarihi doku.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/baku3.jpg" class="d-block w-100" alt="Haydar Aliyev Merkezi">
        <div class="carousel-caption">
            <h4 class="fw-bold">Mimari Harikalar</h4>
            <p>Haydar Aliyev Merkezi: Geleceğin çizgilerini bugünden yansıtan tasarım.</p>
        </div>
    </div>
</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bakuSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bakuSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="row mt-5 g-4">
            <div class="col-md-8">
                <div class="card p-4 bg-white shadow-sm h-100">
                    <h3 class="border-bottom pb-2">Hazar'ın Kıyısında Bir Başkent</h3>
                    <p class="mt-3 fs-5">Azerbaycan'ın kalbi Bakü, tarih ile modernizmin kusursuz bir uyumudur. Doğu ve Batı'nın harmanlandığı bu şehir, her köşesinde farklı bir estetik sunar.</p>
                    <p class="fs-5">Şehir, hem geleneksel İçerişehir yapıları hem de gökyüzüne uzanan modern kuleleri ile büyüleyicidir.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 bg-primary text-white shadow-sm h-100">
                    <h3>Mutlaka Görün</h3>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">📍 Kız Kalesi</li>
                        <li class="mb-2">📍 Şirvanşahlar Sarayı</li>
                        <li class="mb-2">📍 Kristal Salon</li>
                        <li class="mb-2">📍 Bakü Dönme Dolabı</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p class="mb-0">&copy; 2026 Murad Osmanli - Bakü Web Sayfası</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>