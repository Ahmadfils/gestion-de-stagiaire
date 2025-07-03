<?php include 'header.php'; ?>
<?php require_once '../config/connexion.php';

// Suppression réelle
if (isset($_POST['delete_id'])) {
  $delete_id = intval($_POST['delete_id']);
  $sql = "DELETE FROM etudiant WHERE id_etudiant = $delete_id";
  mysqli_query($conn, $sql);
  echo '<div class="alert alert-success">Étudiant supprimé avec succès.</div>';
}

// Mise à jour réelle
if (isset($_POST['edit_id'])) {
  $edit_id = intval($_POST['edit_id']);
  $nom = mysqli_real_escape_string($conn, $_POST['edit_nom']);
  $prenom = mysqli_real_escape_string($conn, $_POST['edit_prenom']);
  $email = mysqli_real_escape_string($conn, $_POST['edit_email']);
  $telephone = mysqli_real_escape_string($conn, $_POST['edit_telephone']);
  $etablissement = mysqli_real_escape_string($conn, $_POST['edit_etablissement']);
  $filiere = mysqli_real_escape_string($conn, $_POST['edit_filiere']);
  $sql = "UPDATE etudiant SET nom='$nom', prenom='$prenom', email='$email', telephone='$telephone', etablissement='$etablissement', filiere='$filiere' WHERE id_etudiant=$edit_id";
  mysqli_query($conn, $sql);
  echo '<div class="alert alert-success">Étudiant modifié avec succès.</div>';
}
?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Liste des Étudiants</h2>
  <div class="d-flex align-items-center gap-2">
    <button class="btn btn-primary" id="ajouterBtn">Ajouter</button>
    <select class="form-select ms-2" id="sortSelect" style="width:auto;">
      <option value="id_etudiant">Trier par ID</option>
      <option value="nom">Trier par Nom</option>
      <option value="prenom">Trier par Prénom</option>
      <option value="email">Trier par Email</option>
      <option value="telephone">Trier par Téléphone</option>
      <option value="etablissement">Trier par Établissement</option>
      <option value="filiere">Trier par Filière</option>
    </select>
  </div>
</div>
<div class="mb-3">
  <input type="text" id="searchInput" class="form-control" placeholder="Rechercher...">
</div>
<table class="table table-striped" id="dataTable">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Établissement</th>
      <th scope="col">Filière</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM etudiant";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
      while ($etudiant = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($etudiant["id_etudiant"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["nom"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["prenom"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["email"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["telephone"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["etablissement"]) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant["filiere"]) . '</td>';
        echo '<td>';
        // Bouton éditer (ouvre la modale)
        echo '<button class="btn btn-sm btn-warning me-2 editBtn" 
                data-id="' . $etudiant["id_etudiant"] . '"
                data-nom="' . htmlspecialchars($etudiant["nom"], ENT_QUOTES) . '"
                data-prenom="' . htmlspecialchars($etudiant["prenom"], ENT_QUOTES) . '"
                data-email="' . htmlspecialchars($etudiant["email"], ENT_QUOTES) . '"
                data-telephone="' . htmlspecialchars($etudiant["telephone"], ENT_QUOTES) . '"
                data-etablissement="' . htmlspecialchars($etudiant["etablissement"], ENT_QUOTES) . '"
                data-filiere="' . htmlspecialchars($etudiant["filiere"], ENT_QUOTES) . '">
                Éditer</button>';
        // Bouton supprimer (formulaire POST)
        echo '<form method="post" style="display:inline;" onsubmit="return confirm(\'Supprimer cet étudiant ?\');">';
        echo '<input type="hidden" name="delete_id" value="' . $etudiant["id_etudiant"] . '">';
        echo '<button type="submit" class="btn btn-sm btn-danger">Supprimer</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
      }
    } else {
      echo '<tr><td colspan="8" class="text-center">Aucun étudiant trouvé.</td></tr>';
    }
    ?>
  </tbody>
</table>
<nav>
  <ul class="pagination" id="pagination">
    <!-- Pagination JS -->
  </ul>
</nav>
<!-- Modale édition -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Éditer l'étudiant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="edit_id" id="edit_id">
          <div class="mb-2">
            <label for="edit_nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="edit_nom" id="edit_nom" required>
          </div>
          <div class="mb-2">
            <label for="edit_prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="edit_prenom" id="edit_prenom" required>
          </div>
          <div class="mb-2">
            <label for="edit_email" class="form-label">Email</label>
            <input type="email" class="form-control" name="edit_email" id="edit_email" required>
          </div>
          <div class="mb-2">
            <label for="edit_telephone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="edit_telephone" id="edit_telephone" required>
          </div>
          <div class="mb-2">
            <label for="edit_etablissement" class="form-label">Établissement</label>
            <input type="text" class="form-control" name="edit_etablissement" id="edit_etablissement" required>
          </div>
          <div class="mb-2">
            <label for="edit_filiere" class="form-label">Filière</label>
            <input type="text" class="form-control" name="edit_filiere" id="edit_filiere" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  // Remplir la modale d'édition avec les données de la ligne
  const editBtns = document.querySelectorAll('.editBtn');
  editBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      document.getElementById('edit_id').value = this.dataset.id;
      document.getElementById('edit_nom').value = this.dataset.nom;
      document.getElementById('edit_prenom').value = this.dataset.prenom;
      document.getElementById('edit_email').value = this.dataset.email;
      document.getElementById('edit_telephone').value = this.dataset.telephone;
      document.getElementById('edit_etablissement').value = this.dataset.etablissement;
      document.getElementById('edit_filiere').value = this.dataset.filiere;
      var editModal = new bootstrap.Modal(document.getElementById('editModal'));
      editModal.show();
    });
  });
</script>
<?php include 'footer.php'; ?>