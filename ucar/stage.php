<?php include 'header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Liste des Stages</h2>
  <div class="d-flex align-items-center gap-2">
    <button class="btn btn-primary" id="ajouterBtn">Ajouter</button>
    <select class="form-select ms-2" id="sortSelect" style="width:auto;">
      <option value="id">Trier par ID</option>
      <option value="titre">Trier par Titre</option>
      <option value="date">Trier par Date</option>
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
      <th scope="col">Titre</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Développement Web</td>
      <td>2024-06-01</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Marketing Digital</td>
      <td>2024-06-02</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Réseaux</td>
      <td>2024-06-03</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Comptabilité</td>
      <td>2024-06-04</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Gestion RH</td>
      <td>2024-06-05</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Infographie</td>
      <td>2024-06-06</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Développement Mobile</td>
      <td>2024-06-07</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Data Science</td>
      <td>2024-06-08</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Support Technique</td>
      <td>2024-06-09</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Gestion de Projet</td>
      <td>2024-06-10</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>11</td>
      <td>Développement Web</td>
      <td>2024-06-11</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>Marketing Digital</td>
      <td>2024-06-12</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>13</td>
      <td>Réseaux</td>
      <td>2024-06-13</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>14</td>
      <td>Comptabilité</td>
      <td>2024-06-14</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>15</td>
      <td>Gestion RH</td>
      <td>2024-06-15</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>16</td>
      <td>Infographie</td>
      <td>2024-06-16</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>17</td>
      <td>Développement Mobile</td>
      <td>2024-06-17</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>18</td>
      <td>Data Science</td>
      <td>2024-06-18</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>19</td>
      <td>Support Technique</td>
      <td>2024-06-19</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>20</td>
      <td>Gestion de Projet</td>
      <td>2024-06-20</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
  </tbody>
</table>
<nav>
  <ul class="pagination" id="pagination">
    <!-- Pagination JS -->
  </ul>
</nav>
<?php include 'footer.php'; ?>