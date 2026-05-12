<?php
session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] === true){
    header("Location: index.php");
    exit();
}

$dogru_mail = "b241210558@sakarya.edu.tr";
$dogru_sifre = "b241210558";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if ($email == $dogru_mail && $sifre == $dogru_sifre) {
        $_SESSION['login'] = true;
        header("Location: index.php"); 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Murad Osmanli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            background-color: #000; /* Arka planı siyah yapalım ki kodlar net görünsün */
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/image_ead93b.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden; /* Kaydırma çubuğunu gizle */
        }

        /* Matrix Canvas Ayarı */
        #matrixCanvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1; /* Formun arkasında kalması için */
            opacity: 0.3; /* Fotoğrafın da görünmesi için şeffaflık */
            pointer-events: none; /* Mouse tıklamalarını engellemesin */
        }

        .login-card {
            position: relative;
            z-index: 10; /* Canvas'ın önünde durması için */
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 255, 70, 0.3); /* Hafif yeşil sınır çizgisi */
            border-radius: 20px;
            padding: 40px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 0 30px rgba(0, 255, 70, 0.2);
            color: white;
            text-align: center;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(0, 255, 70, 0.3) !important;
            border-radius: 10px !important;
            color: #0f0 !important; /* Yazı rengi yeşil */
            padding: 12px !important;
        }

        .form-control::placeholder {
            color: rgba(0, 255, 70, 0.5) !important;
        }

        .btn-primary {
            background: #0f0 !important; /* Matrix Yeşili Buton */
            color: #000 !important;
            border: none !important;
            font-weight: bold;
            padding: 12px;
            border-radius: 10px;
            transition: 0.3s;
            width: 100%;
            margin-top: 15px;
        }

        .btn-primary:hover {
            box-shadow: 0 0 20px #0f0;
            transform: scale(1.02);
        }

        .alert-custom {
            background: rgba(220, 53, 69, 0.85);
            color: white;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <canvas id="matrixCanvas"></canvas>

    <div class="login-card">
        <i class="bi bi-terminal display-4 mb-3 d-block" style="color: #0f0;"></i>
        <h4 class="fw-bold" style="color: #0f0; letter-spacing: 2px;">SİSTEME GİRİŞ</h4>
        <p class="small mb-4 opacity-75">Sakarya Üniversitesi | Bilgisayar Mühendisliği</p>

        <?php if(isset($hata_mesaji)): ?>
            <div class="alert-custom">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?php echo $hata_mesaji; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="text-start mb-3">
                <label class="small ms-1 mb-1 opacity-75">E-posta</label>
                <input type="text" name="email" class="form-control" placeholder="b241210558@sakarya.edu.tr" required>
            </div>
            
            <div class="text-start mb-3">
                <label class="small ms-1 mb-1 opacity-75">Şifre</label>
                <input type="password" name="sifre" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary shadow">ERİŞİM İZNİ AL</button>
        </form>

        <div class="mt-4 small opacity-75" style="border-top: 1px solid rgba(0, 255, 70, 0.2); padding-top: 15px;">
            Murad Osmanli &copy; 2026<br>
            <span style="color: #0f0;">System Administrator</span>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('matrixCanvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        // Akan yazılar (Kendi ismin ve okulun da geçiyor)
        const letters = "010101MURADOSMANLI0101SAKARYAUNI010101B241210558";
        const fontSize = 16;
        const columns = canvas.width / fontSize;
        const drops = [];

        for (let i = 0; i < columns; i++) {
            drops[i] = 1;
        }

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = "#0F0"; 
            ctx.font = fontSize + "px monospace";

            for (let i = 0; i < drops.length; i++) {
                const text = letters.charAt(Math.floor(Math.random() * letters.length));
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                
                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }

        setInterval(draw, 33);

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>

</body>
</html>