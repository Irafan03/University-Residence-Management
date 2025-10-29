<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Résidence U</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            margin: 0;
        }
        .hero {
            background: linear-gradient(135deg, #286474ff 0%, #551b1bff 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .btn-custom {
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card-hover {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            background:  #286474ff ;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.5rem;
        }
        footer {
            background: #212529;
            color: #adb5bd;
            padding: 30px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Bienvenue à Résidence U</h1>
            <p class="lead mb-4">La meilleure résidence étudiante pour votre succès</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#login" class="btn btn-light btn-custom">Se connecter</a>
                <a href="#register" class="btn btn-outline-light btn-custom">S'inscrire</a>
            </div>
        </div>
    </section>

    <!-- Features -->
   <!-- Section "Pourquoi nous choisir ?" avec fond turquoise -->
<div style="color: #286474ff;" class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Pourquoi nous choisir ?</h2>
        <p class="lead opacity-90">Tout pour votre confort et votre réussite</p>
    </div>
</div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-4">
                    <div class="icon-circle">
                        <i class="bi bi-building"></i>
                    </div>
                    <h5 class="fw-bold">200 Chambres</h5>
                    <p class="text-muted small">Modernes, propres, bien équipées</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-4">
                    <div class="icon-circle">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <h5 class="fw-bold">Wi-Fi Gratuit</h5>
                    <p class="text-muted small">Rapide, partout, 24h/24</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-4">
                    <div class="icon-circle">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h5 class="fw-bold">Sécurité 24/7</h5>
                    <p class="text-muted small">Caméras, badge, gardien</p>
                </div>
            </div>
        </div>
    </div>

 <!-- CTA -->
<div style="background-color: #286474ff; color: white;" class="py-5 text-center">
    <div class="container">
        <h3 class="fw-bold mb-4">Prêt à réserver votre chambre ?</h3>
        <a href="#login" class="btn btn-light btn-lg px-5">Commencer maintenant</a>
    </div>
</div>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">
                <i class="bi bi-building-fill"></i> Résidence U 
                <span class="mx-3">|</span> 
                Campus Central, 75000 Paris
            </p>
            <p class="small mb-0 mt-2">&copy; <span id="year"></span> Tous droits réservés</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Année automatique -->
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

</body>
</html>