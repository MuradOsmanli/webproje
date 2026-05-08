<?php
session_start();
// Giriş kontrolü: Giriş yapmayan bu sayfayı göremez
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){
    header("Location: login.php");
    exit();
}

// Formdan gelen verileri çekiyoruz
// Eğer veri gelmediyse boş bırakıyoruz
$ad = $_POST['ad'] ?? '';
$soyad = $_POST['soyad'] ?? '';
$email = $_POST['email'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Özeti | Web Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-success text-white text-center py-4">
                        <h2 class="mb-0">Mesajınız Bize Ulaştı!</h2>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-muted mb-4 border-bottom pb-2">Gönderilen Bilgiler:</h4>
                        
                        <div class="mb-3">
                            <strong>Ad Soyad:</strong> 
                            <span class="text-dark fs-5"><?php echo htmlspecialchars($ad . " " . $soyad); ?></span>
                        </div>
                        
                        <div class="mb-3">
                            <strong>E-posta:</strong> 
                            <span class="text-dark fs-5"><?php echo htmlspecialchars($email); ?></span>
                        </div>
                        
                        <div class="mb-4">
                            <strong>Mesajınız:</strong>
                            <div class="p-3 bg-light rounded mt-2 border">
                                <?php echo nl2br(htmlspecialchars($mesaj)); ?>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <a href="index.php" class="btn btn-primary px-5 py-2 fw-bold">Ana Sayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>