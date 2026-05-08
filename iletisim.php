<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim | Web Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Web Projesi</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="cv.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link active" href="iletisim.php">İletişim</a>
                <a class="nav-link text-danger fw-bold" href="logout.php">Çıkış</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">Bize Ulaşın</h2>
                    <form action="gonder.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Adınız</label>
                            <input type="text" name="ad" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Soyadınız</label>
                            <input type="text" name="soyad" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-posta Adresiniz</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mesajınız</label>
                            <textarea name="mesaj" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Gönder</button>
                        <button type="reset" class="btn btn-outline-secondary w-100 mt-2">Temizle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>