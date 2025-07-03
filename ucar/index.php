<?php include 'header.php'; ?>
<div class="container">
  <h1 class="mb-4">Bienvenue sur le Tableau de bord</h1>
  <div class="row g-4 mb-4">
    <div class="col-md-3">
      <div class="card text-black" style="background: linear-gradient(135deg, #ffe066 70%, #212529 100%);">
        <div class="card-body d-flex align-items-center">
          <div class="me-3">
            <svg width="40" height="40" fill="black" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              <path d="M14 14s-1-1.5-6-1.5S2 14 2 14V13a6 6 0 1 1 12 0v1z" />
            </svg>
          </div>
          <div>
            <h5 class="card-title mb-1">Étudiants</h5>
            <p class="card-text fs-4 fw-bold">20</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-black" style="background: linear-gradient(135deg, #ffe066 70%, #212529 100%);">
        <div class="card-body d-flex align-items-center">
          <div class="me-3">
            <svg width="40" height="40" fill="black" viewBox="0 0 16 16">
              <path d="M2 2h12v2H2V2zm0 3h12v2H2V5zm0 3h12v2H2V8zm0 3h12v2H2v-2z" />
            </svg>
          </div>
          <div>
            <h5 class="card-title mb-1">Demandes</h5>
            <p class="card-text fs-4 fw-bold">20</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-black" style="background: linear-gradient(135deg, #ffe066 70%, #212529 100%);">
        <div class="card-body d-flex align-items-center">
          <div class="me-3">
            <svg width="40" height="40" fill="black" viewBox="0 0 16 16">
              <path d="M4 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z" />
            </svg>
          </div>
          <div>
            <h5 class="card-title mb-1">Stages</h5>
            <p class="card-text fs-4 fw-bold">20</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-black" style="background: linear-gradient(135deg, #ffe066 70%, #212529 100%);">
        <div class="card-body d-flex align-items-center">
          <div class="me-3">
            <svg width="40" height="40" fill="black" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              <path d="M14 14s-1-1.5-6-1.5S2 14 2 14V13a6 6 0 1 1 12 0v1z" />
            </svg>
          </div>
          <div>
            <h5 class="card-title mb-1">Tuteurs</h5>
            <p class="card-text fs-4 fw-bold">20</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-6 mb-4 mb-md-0">
      <div class="card h-100">
        <div class="card-header bg-dark text-warning fw-bold">Demandes récentes</div>
        <div class="card-body p-0">
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20</td>
                <td>Isabelle Huppert</td>
                <td>2024-06-20</td>
                <td><a href="visualiser.php?id=20" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Rachid Taha</td>
                <td>2024-06-19</td>
                <td><a href="visualiser.php?id=19" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Chloe Moretz</td>
                <td>2024-06-18</td>
                <td><a href="visualiser.php?id=18" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Tom Hardy</td>
                <td>2024-06-17</td>
                <td><a href="visualiser.php?id=17" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Fatima Zahra</td>
                <td>2024-06-16</td>
                <td><a href="visualiser.php?id=16" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Yannick Noah</td>
                <td>2024-06-15</td>
                <td><a href="visualiser.php?id=15" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Lea Simon</td>
                <td>2024-06-14</td>
                <td><a href="visualiser.php?id=14" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>13</td>
                <td>Mohamed Salah</td>
                <td>2024-06-13</td>
                <td><a href="visualiser.php?id=13" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Anna Giraud</td>
                <td>2024-06-12</td>
                <td><a href="visualiser.php?id=12" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Karim Ziani</td>
                <td>2024-06-11</td>
                <td><a href="visualiser.php?id=11" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header bg-dark text-warning fw-bold">Stages récents</div>
        <div class="card-body p-0">
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20</td>
                <td>Gestion de Projet</td>
                <td>2024-06-20</td>
                <td><a href="visualiser.php?id=20" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Support Technique</td>
                <td>2024-06-19</td>
                <td><a href="visualiser.php?id=19" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Data Science</td>
                <td>2024-06-18</td>
                <td><a href="visualiser.php?id=18" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Développement Mobile</td>
                <td>2024-06-17</td>
                <td><a href="visualiser.php?id=17" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Infographie</td>
                <td>2024-06-16</td>
                <td><a href="visualiser.php?id=16" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Gestion RH</td>
                <td>2024-06-15</td>
                <td><a href="visualiser.php?id=15" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Comptabilité</td>
                <td>2024-06-14</td>
                <td><a href="visualiser.php?id=14" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>13</td>
                <td>Réseaux</td>
                <td>2024-06-13</td>
                <td><a href="visualiser.php?id=13" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Marketing Digital</td>
                <td>2024-06-12</td>
                <td><a href="visualiser.php?id=12" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
              <tr>
                <td>11</td>
                <td>Développement Web</td>
                <td>2024-06-11</td>
                <td><a href="visualiser.php?id=11" class="btn btn-sm btn-dark">Voir</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <p>Utilisez le menu à gauche pour naviguer entre les différentes sections de gestion des stagiaires.</p>
</div>
<?php include 'footer.php'; ?>