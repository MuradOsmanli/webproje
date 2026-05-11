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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .carousel-item img {
            width: 100%;
            height: 500px; 
            object-fit: cover; 
            object-position: center; 
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.65); 
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

        .weather-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
        }

        /* Yeni eklenen stiller */
        .badge-custom {
            font-size: 0.9rem;
            padding: 10px 15px;
            border-radius: 50px;
            background-color: #f8f9fa;
            color: #333;
            border: 1px solid #dee2e6;
            margin: 5px;
            display: inline-block;
            transition: 0.3s;
        }
        .badge-custom:hover {
            background-color: #0d6efd;
            color: white;
            transform: translateY(-2px);
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
                <div class="card p-4 bg-white shadow-sm mb-4">
                    <h3 class="border-bottom pb-2">Hazar'ın Kıyısında Bir Başkent</h3>
                    <p class="mt-3 fs-5">Azerbaycan'ın kalbi Bakü, tarih ile modernizmin kusursuz bir uyumudur. Doğu ve Batı'nın harmanlandığı bu şehir, her köşesinde farklı bir estetik sunar.</p>
                    <p class="fs-5">Şehir, hem geleneksel İçerişehir yapıları hem de gökyüzüne uzanan modern kuleleri ile büyüleyicidir.</p>
                </div>

                <div class="card p-4 bg-white shadow-sm">
                    <h4 class="fw-bold text-primary mb-3"><i class="bi bi-lightbulb-fill me-2 text-warning"></i>Biliyor muydunuz?</h4>
                    <div class="accordion accordion-flush" id="factsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#fact1">
                                    Dünyanın En Alçak Başkenti
                                </button>
                            </h2>
                            <div id="fact1" class="accordion-collapse collapse" data-bs-parent="#factsAccordion">
                                <div class="accordion-body text-muted">
                                    Bakü, deniz seviyesinden 28 metre aşağıdadır ve bu özelliğiyle dünyanın en alçak rakımlı başkentidir.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#fact2">
                                    Rüzgarlar Şehri
                                </button>
                            </h2>
                            <div id="fact2" class="accordion-collapse collapse" data-bs-parent="#factsAccordion">
                                <div class="accordion-body text-muted">
                                    "Bakü" ismi Farsça "Bad-kube" kelimesinden gelir ve "rüzgarların estiği şehir" anlamını taşır.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 bg-primary text-white shadow-sm mb-4">
                    <h3><i class="bi bi-geo-fill me-2"></i>Mutlaka Görün</h3>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">📍 Kız Kalesi</li>
                        <li class="mb-2">📍 Şirvanşahlar Sarayı</li>
                        <li class="mb-2">📍 Kristal Salon</li>
                        <li class="mb-2">📍 Bakü Dönme Dolabı</li>
                    </ul>
                </div>

                <div class="card p-4 bg-white shadow-sm mb-4 border-start border-warning border-5">
                    <h4 class="fw-bold"><i class="bi bi-egg-fried text-warning me-2"></i>Meşhur Lezzetler</h4>
                    <div class="mt-3">
                        <span class="badge-custom">🥘 Şah Pilavı</span>
                        <span class="badge-custom">🥟 Düşbere</span>
                        <span class="badge-custom">🥙 Lüle Kebap</span>
                        <span class="badge-custom">🍯 Baklava</span>
                    </div>
                </div>

                <div class="card shadow-sm weather-card">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-3 text-dark text-start border-bottom pb-2">
                            <i class="bi bi-cloud-sun-fill text-primary me-2"></i>Bakü'de Hava
                        </h5>
                        
                        <a class="weatherwidget-io" href="https://forecast7.com/tr/40d4149d87/baku/" data-label_1="BAKÜ" data-label_2="Azerbaycan" data-font="Roboto" data-icons="Climacons Animated" data-theme="pure" >BAKÜ HAVA DURUMU</a>
                        <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>
                        
                        <hr class="my-3">
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-start">
                                <small class="text-muted d-block fw-bold">Yerel Saat</small>
                                <span class="fw-bold text-primary fs-5" id="bakuClock">--:--</span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block fw-bold">Para Birimi</small>
                                <span class="fw-bold text-dark fs-5">₼ AZN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p class="mb-0">&copy; 2026 Murad Osmanli - Bakü Web Sayfası</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateBakuTime() {
            const now = new Date();
            const bakuTime = new Date(now.getTime() + (now.getTimezoneOffset() * 60000) + (4 * 3600000));
            const timeString = bakuTime.getHours().toString().padStart(2, '0') + ":" + 
                               bakuTime.getMinutes().toString().padStart(2, '0') + ":" +
                               bakuTime.getSeconds().toString().padStart(2, '0');
            document.getElementById('bakuClock').innerText = timeString;
        }
        setInterval(updateBakuTime, 1000);
        updateBakuTime();
    </script>
</body>
</html>