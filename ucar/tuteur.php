<?php include 'header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Liste des Tuteurs</h2>
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
      <td>Jean Tuteur</td>
      <td>jean.tuteur@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Marie Guide</td>
      <td>marie.guide@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Ali Mentor</td>
      <td>ali.mentor@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Sara Coach</td>
      <td>sara.coach@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Paul Conseiller</td>
      <td>paul.conseiller@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Linda Suivi</td>
      <td>linda.suivi@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Omar Guide</td>
      <td>omar.guide@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Emma Suivi</td>
      <td>emma.suivi@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Lucas Mentor</td>
      <td>lucas.mentor@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Julie Coach</td>
      <td>julie.coach@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>11</td>
      <td>Karim Conseiller</td>
      <td>karim.conseiller@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>Anna Guide</td>
      <td>anna.guide@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>13</td>
      <td>Mohamed Mentor</td>
      <td>mohamed.mentor@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>14</td>
      <td>Lea Coach</td>
      <td>lea.coach@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>15</td>
      <td>Yannick Conseiller</td>
      <td>yannick.conseiller@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>16</td>
      <td>Fatima Suivi</td>
      <td>fatima.suivi@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>17</td>
      <td>Tom Guide</td>
      <td>tom.guide@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>18</td>
      <td>Chloe Mentor</td>
      <td>chloe.mentor@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>19</td>
      <td>Rachid Coach</td>
      <td>rachid.coach@email.com</td>
      <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
    </tr>
    <tr>
      <td>20</td>
      <td>Isabelle Conseiller</td>
      <td>isabelle.conseiller@email.com</td>
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