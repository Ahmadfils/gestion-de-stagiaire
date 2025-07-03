<?php include 'public-header.php'; ?>
<div class="container py-5">
  <div style="max-width:600px; margin:auto;">
    <h2 class="mb-4 text-orange text-center">Demande de stage</h2>
    <?php
    $success = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Ici, traiter l'envoi et l'upload (à compléter selon besoin)
      $success = true;
    }
    if ($success) {
      echo '<div class="alert alert-success">Votre demande a bien été envoyée. Merci !</div>';
    }
    ?>
    <form method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">
        <div class="col-md-6">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="col-md-6">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
      </div>
      <div class="row g-3 mt-1">
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
          <label for="telephone" class="form-label">Téléphone</label>
          <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>
      </div>
      <div class="mt-3">
        <label for="lettre" class="form-label">Lettre de demande (PDF)</label>
        <input type="file" class="form-control" id="lettre" name="lettre" accept="application/pdf" required>
      </div>
      <div class="mt-3">
        <label for="cv" class="form-label">CV (PDF)</label>
        <input type="file" class="form-control" id="cv" name="cv" accept="application/pdf" required>
      </div>
      <div class="mt-3">
        <label for="bulletin" class="form-label">Bulletin de notes (PDF)</label>
        <input type="file" class="form-control" id="bulletin" name="bulletin" accept="application/pdf" required>
      </div>
      <button type="submit" class="btn btn-orange w-100 mt-4">Envoyer la demande</button>
    </form>
  </div>
</div>
<?php include 'public-footer.php'; ?>