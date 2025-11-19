<?php $pageTitle = "Accueil"; include 'header.php'; ?>
<section class="hero text-center py-5 bg-light rounded shadow mb-4">
    <h1 class="display-4 fw-bold text-primary"><i class="bi bi-rocket"></i> Bienvenue sur Azure Mini App</h1>
    <p class="lead">Une application web professionnelle déployée sur Azure for Students, démontrant PHP et Bootstrap.</p>
    <a href="about.php" class="btn btn-primary btn-lg"><i class="bi bi-arrow-right"></i> En savoir plus</a>
</section>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-card">
            <div class="card-body text-center">
                <i class="bi bi-code-slash text-primary fs-1"></i>
                <h5 class="card-title">Développement PHP</h5>
                <p class="card-text">Pages dynamiques générées avec PHP pour une expérience fluide.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-card">
            <div class="card-body text-center">
                <i class="bi bi-cloud text-primary fs-1"></i>
                <h5 class="card-title">Déploiement Azure</h5>
                <p class="card-text">Hébergée sur Azure App Service via GitHub pour une scalabilité.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm hover-card">
            <div class="card-body text-center">
                <i class="bi bi-palette text-primary fs-1"></i>
                <h5 class="card-title">Design Moderne</h5>
                <p class="card-text">Interface responsive et agréable avec Bootstrap.</p>
            </div>
        </div>
    </div>
</div>
<p class="text-muted text-center mt-4">Page actuelle : Accueil</p>
<?php include 'footer.php'; ?>