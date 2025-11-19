<?php $pageTitle = "Contact"; include 'header.php'; ?>
<h2>Contact</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<p>Merci, $name ! Message reçu (simulation).</p>";
} else {
?>
<form method="post" action="contact.php">
    <label>Nom :</label>
    <input type="text" name="name" required><br><br>
    <label>Email :</label>
    <input type="email" name="email" required><br><br>
    <label>Message :</label>
    <textarea name="message" required></textarea><br><br>
    <button type="submit">Envoyer</button>
</form>
<?php } ?>
<p>Page actuelle : Contact</p>
<?php include 'footer.php'; ?>