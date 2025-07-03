<?php include 'header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Liste des Utilisateurs</h2>
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-primary" id="ajouterBtn">Ajouter</button>
        <select class="form-select ms-2" id="sortSelect" style="width:auto;">
            <option value="id">Trier par ID</option>
            <option value="nom">Trier par Nom</option>
            <option value="role">Trier par Rôle</option>
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
            <th scope="col">Rôle</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Admin Principal</td>
            <td>Administrateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jean Dupont</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Marie Martin</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ali Ben</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sara Lopez</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Paul Dubois</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Linda Kim</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Omar Sy</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Emma Stone</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Lucas Moreau</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>11</td>
            <td>Julie Petit</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>12</td>
            <td>Karim Ziani</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>13</td>
            <td>Anna Giraud</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>14</td>
            <td>Mohamed Salah</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>15</td>
            <td>Lea Simon</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>16</td>
            <td>Yannick Noah</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>17</td>
            <td>Fatima Zahra</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>18</td>
            <td>Tom Hardy</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>19</td>
            <td>Chloe Moretz</td>
            <td>Utilisateur</td>
            <td><button class="btn btn-sm btn-warning me-2">Éditer</button><button class="btn btn-sm btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td>20</td>
            <td>Rachid Taha</td>
            <td>Utilisateur</td>
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