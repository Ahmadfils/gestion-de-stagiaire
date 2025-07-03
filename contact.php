<?php include 'public-header.php'; ?>
<div class="container py-5">
  <div style="max-width:500px; margin:auto;">
    <h2 class="mb-4 text-orange text-center">Contactez-nous</h2>
    <?php
    $success = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Ici, traiter l'envoi (mail, base, etc.)
      $success = true;
    }
    if ($success) {
      echo '<div class="alert alert-success">Votre message a bien été envoyé. Merci !</div>';
    }
    ?>
    <form method="post" class="bg-white p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="sujet" class="form-label">Sujet</label>
        <input type="text" class="form-control" id="sujet" name="sujet" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-orange w-100">Envoyer</button>
    </form>
  </div>
</div>
<?php include 'public-footer.php'; ?>