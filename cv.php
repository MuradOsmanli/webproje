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
    <title>Özgeçmiş | Murad Osmanli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Web Projesi</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link active" href="cv.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link text-danger fw-bold" href="logout.php">Çıkış</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 mb-4">
                <div class="bg-white p-4 rounded-3 shadow-sm border">
                    <h2 class="h3 border-bottom pb-2 mb-4 text-primary">Eğitim Bilgileri</h2>
                    <div class="mb-4">
                        <h4 class="h5 fw-bold">Sakarya Üniversitesi</h4>
                        <p class="text-muted mb-1">Bilgisayar Mühendisliği</p>
                        <span class="badge bg-success">2026 - Devam Ediyor</span>
                    </div>
                    <div>
                        <h4 class="h5 fw-bold">Bakü 207 No'lu Devlet Lisesi</h4>
                        <p class="text-muted mb-1">Bakü, Azerbaycan</p>
                        <span class="badge bg-secondary">2023 Mezunu</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="bg-white p-4 rounded-3 shadow-sm border">
                    <h2 class="h3 border-bottom pb-2 mb-4 text-primary">Diller</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">Azerbaycan Türkçesi <span class="badge bg-primary rounded-pill">Anadil</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">Türkçe <span class="badge bg-primary rounded-pill">İleri Seviye</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">İngilizce <span class="badge bg-info rounded-pill">Orta</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">Rusça <span class="badge bg-info rounded-pill">Orta</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>