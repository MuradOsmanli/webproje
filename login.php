<?php
session_start();

// Senin giriş bilgilerin
$dogru_mail = "b241210558@sakarya.edu.tr";
$dogru_sifre = "b241210558";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if ($email == $dogru_mail && $sifre == $dogru_sifre) {
        $_SESSION['login'] = true;
        header("Location: index.php"); // Giriş başarılıysa ana sayfaya gönder
        exit();
    } else {
        $hata_mesaji = "Hatalı email veya şifre!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap | Murad Osmanli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 shadow p-4 bg-white rounded">
                <h2 class="text-center mb-4">Giriş Yap</h2>
                
                <?php if(isset($hata_mesaji)): ?>
                    <div class="alert alert-danger"><?php echo $hata_mesaji; ?></div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">E-posta Adresi</label>
                        <input type="text" name="email" class="form-control" placeholder="b241210558@sakarya.edu.tr" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Şifre</label>
                        <input type="password" name="sifre" class="form-control" placeholder="Şifreniz" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>