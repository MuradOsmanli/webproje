<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Murad Osmanli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        :root { --accent-color: #0d6efd; --card-bg: #ffffff; }
        body { transition: all 0.3s ease; font-family: 'Segoe UI', sans-serif; }
        
        .contact-card { border-radius: 20px; border: none; background: var(--card-bg); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .info-box { background: #f8f9fa; border-radius: 15px; padding: 18px; transition: 0.3s; border: 1px solid rgba(0,0,0,0.03); }
        .info-box:hover { background: #fff; transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0,0,0,0.06); }
        
        .social-icon { font-size: 1.6rem; color: var(--accent-color); transition: 0.3s; margin: 0 10px; }
        .social-icon:hover { color: #e1306c; transform: translateY(-3px); }
        
        .status-badge { font-size: 0.75rem; padding: 6px 12px; border-radius: 50px; background: #e8f5e9; color: #2e7d32; font-weight: 600; }
        
        .map-container { border-radius: 15px; overflow: hidden; height: 220px; border: 1px solid #eee; margin-top: 20px; }
        
        .custom-file-upload { border: 2px dashed #cbd5e0; border-radius: 12px; padding: 25px; text-align: center; cursor: pointer; transition: 0.3s; background: #fafafa; }
        .custom-file-upload:hover { border-color: var(--accent-color); background: #f0f7ff; }
        
        /* Form Odaklanma Efektleri */
        .form-control:focus { background-color: #fff !important; border: 1px solid var(--accent-color) !important; box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1) !important; }
        
        /* Dark Mode */
        body.dark-mode { background-color: #0f172a !important; color: #f1f5f9; }
        body.dark-mode .contact-card { background-color: #1e293b; color: #fff; }
        body.dark-mode .info-box { background-color: #334155; border-color: #475569; color: #fff; }
        body.dark-mode .form-control { background-color: #334155 !important; color: #fff; border: 1px solid #475569; }
        body.dark-mode .custom-file-upload { background-color: #334155; border-color: #475569; }
        body.dark-mode footer { background-color: #1e293b !important; color: #94a3b8 !important; }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">SAÜ <span class="text-primary">|</span> WEB</a>
            <div class="ms-auto d-flex align-items-center">
                <button class="btn btn-link text-light me-3 p-0" onclick="toggleDarkMode()">
                    <i id="themeIcon" class="bi bi-moon-stars-fill fs-5"></i>
                </button>
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Hakkında</a>
                    <a class="nav-link" href="cv.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link active fw-bold" href="iletisim.php">İletişim</a>
                    <a class="nav-link text-danger ms-lg-3" href="logout.php"><i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card contact-card p-4 h-100 shadow">
                    <h5 class="fw-bold mb-4 d-flex align-items-center text-primary">
                        <i class="bi bi-info-circle-fill me-2"></i> Bilgilerim
                    </h5>
                    
                    <div class="info-box mb-3 d-flex align-items-center">
                        <i class="bi bi-envelope-at text-primary fs-4 me-3"></i>
                        <div class="overflow-hidden">
                            <p class="mb-0 small text-muted fw-bold">E-posta</p>
                            <span class="text-break">muradosmanli999@gmail.com</span>
                        </div>
                    </div>

                    <div class="info-box mb-4 d-flex align-items-center">
                        <i class="bi bi-geo-alt text-danger fs-4 me-3"></i>
                        <div>
                            <p class="mb-0 small text-muted fw-bold">Konum</p>
                            <span>Sakarya / Türkiye</span>
                        </div>
                    </div>

                    <div class="info-box mb-4 d-flex align-items-center">
                        <i class="bi bi-lightning-charge text-warning fs-4 me-3"></i>
                        <div>
                            <p class="mb-0 small text-muted fw-bold">Durum</p>
                            <span class="status-badge"><i class="bi bi-circle-fill me-1" style="font-size:0.5rem"></i> Çevrimiçi</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <a href="https://www.instagram.com/murad__osmanlii/" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-github"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    </div>

                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.61053472097!2d30.3323383!3d40.7441991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb288c527e023%3A0x6d9571171804f85d!2sSakarya%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1715350000000!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card contact-card p-4 p-md-5 shadow">
                    <h2 class="fw-bold mb-2">Hızlı Mesaj Gönder</h2>
                    <p class="text-muted mb-4">Formu doldurarak benimle iletişime geçebilirsiniz.</p>
                    
                    <form action="gonder.php" method="POST" enctype="multipart/form-data" id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Adınız</label>
                                <input type="text" name="ad" class="form-control bg-light" placeholder="Murad" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Soyadınız</label>
                                <input type="text" name="soyad" class="form-control bg-light" placeholder="Osmanli" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold">E-posta</label>
                                <input type="email" name="email" class="form-control bg-light" placeholder="murad@example.com" required>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label small fw-bold">Dosya Ekle</label>
                                <div class="custom-file-upload" onclick="document.getElementById('fileInput').click();">
                                    <i class="bi bi-cloud-arrow-up fs-3 text-primary"></i>
                                    <p class="mb-0 mt-2 small text-muted" id="fileNameDisplay">Tıklayın veya dosya seçin (Max 5MB)</p>
                                    <input type="file" name="dosya" id="fileInput" class="d-none">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-label small fw-bold">Mesajınız</label>
                                    <span id="charCount" class="small">0 / 500</span>
                                </div>
                                <textarea id="messageArea" name="mesaj" class="form-control bg-light" rows="4" maxlength="500" placeholder="Sorularınızı buraya yazabilirsiniz..." required></textarea>
                            </div>
                            
                            <div class="col-md-12 mt-4">
                                <button type="submit" id="submitBtn" class="btn btn-primary btn-lg w-100 fw-bold py-3 shadow">
                                    <span id="btnText">MESAJI GÖNDER</span>
                                    <div id="btnSpinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 text-muted border-top bg-white mt-auto">
        <div class="container small fw-bold">
            Murad Osmanli © 2026 | Sakarya Üniversitesi Bilgisayar Mühendisliği
        </div>
    </footer>

    <script>
        // Dark Mode
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const icon = document.getElementById('themeIcon');
            icon.className = document.body.classList.contains('dark-mode') ? 'bi bi-sun-fill fs-5' : 'bi bi-moon-stars-fill fs-5';
        }

        // Karakter Sayacı
        const messageArea = document.getElementById('messageArea');
        messageArea.addEventListener('input', function() {
            document.getElementById('charCount').textContent = `${this.value.length} / 500`;
        });

        // Dosya İsmi Gösterimi
        document.getElementById('fileInput').addEventListener('change', function() {
            if(this.files.length > 0) {
                document.getElementById('fileNameDisplay').innerHTML = `<i class="bi bi-check-circle-fill text-success"></i> <strong>${this.files[0].name}</strong>`;
            }
        });

        // Gönderiliyor Animasyonu
        document.getElementById('contactForm').onsubmit = function() {
            const btn = document.getElementById('submitBtn');
            const text = document.getElementById('btnText');
            const spinner = document.getElementById('btnSpinner');
            
            btn.classList.add('disabled');
            text.textContent = "GÖNDERİLİYOR...";
            spinner.classList.remove('d-none');
            return true; // Formun gonder.php'ye gitmesine izin ver
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>