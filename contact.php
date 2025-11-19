<?php $pageTitle = "Contact"; include 'header.php'; ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title text-center"><i class="bi bi-envelope-fill text-primary"></i> Contactez-nous</h2>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                    echo "<div class='alert alert-success fade show'><i class='bi bi-check-circle-fill'></i> Merci, $name ! Votre message a été envoyé avec succès.</div>";
                } else {
                ?>
                <form method="post" action="contact.php" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom complet</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Veuillez entrer un email valide.</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        <div class="invalid-feedback">Veuillez entrer un message.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send-fill"></i> Envoyer le message</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()
</script>
<p class="text-muted text-center mt-4">Page actuelle : Contact</p>
<?php include 'footer.php'; ?>