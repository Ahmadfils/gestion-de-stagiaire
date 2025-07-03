<?php include 'header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Liste des Étudiants</h2>
  <div class="d-flex align-items-center gap-2">
    <button class="btn btn-primary" id="ajouterBtn">Ajouter</button>
    <select class="form-select ms-2" id="sortSelect" style="width:auto;">
      <option value="id">Trier par ID</option>
      <option value="nom">Trier par Nom</option>
      <option value="email">Trier par Email</option>
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
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Jean Dupont</td>
      <td>jean.dupont@email.com</td>
      <td>
        <button class="btn btn-sm btn-warning me-2">Éditer</button>
        <button class="btn btn-sm btn-danger">Supprimer</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Marie Martin</td>
      <td>marie.martin@email.com</td>
      <td>
        <button class="btn btn-sm btn-warning me-2">Éditer</button>
        <button class="btn btn-sm btn-danger">Supprimer</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Ali Ben</td>
      <td>ali.ben@email.com</td>
      <td>
        <button class="btn btn-sm btn-warning me-2">Éditer</button>
        <button class="btn btn-sm btn-danger">Supprimer</button>
      </td>
    </tr>
    <!-- Ajoute d'autres lignes ici ou via PHP -->
  </tbody>
</table>
<nav>
  <ul class="pagination" id="pagination">
    <!-- Pagination JS -->
  </ul>
</nav>
<?php include 'footer.php'; ?>