<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Gestion de Stagiaire</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    @media (min-width: 992px) {
      .sidebar-fixed {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 220px;
        z-index: 1030;
      }

      .main-content {
        margin-left: 220px;
      }
    }

    @media (max-width: 991.98px) {
      .sidebar-fixed {
        display: none;
      }

      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Sidebar for desktop -->
  <nav class="sidebar sidebar-fixed bg-dark text-white p-3 d-none d-lg-flex flex-column align-items-start">
    <div class="mb-4 w-100">
      <h4 class="fw-bold text-white mb-3 ps-1" style="letter-spacing:2px;">UCAR-VIE</h4>
      <hr class="border-secondary my-0">
    </div>
    <ul class="nav flex-column w-100">
      <li class="nav-item mb-2"><a href="index.php" class="nav-link text-white">Tableau de bord</a></li>
      <li class="nav-item mb-2"><a href="demande.php" class="nav-link text-white">Demande</a></li>
      <li class="nav-item mb-2"><a href="etudiant.php" class="nav-link text-white">Etudiant</a></li>
      <li class="nav-item mb-2"><a href="stage.php" class="nav-link text-white">Stage</a></li>
      <li class="nav-item mb-2"><a href="tuteur.php" class="nav-link text-white">Tuteur</a></li>
      <li class="nav-item mb-2"><a href="utilisateur.php" class="nav-link text-white">Utilisateur</a></li>
      <li class="nav-item mt-4"><a href="deconnexion.php" class="nav-link text-danger">Déconnexion</a></li>
    </ul>
  </nav>
  <!-- Offcanvas for mobile -->
  <nav class="d-lg-none">
    <button class="btn btn-dark m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
      <span class="navbar-toggler-icon"></span> Menu
    </button>
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
      <div class="offcanvas-header bg-dark text-white">
        <h5 class="offcanvas-title fw-bold" id="offcanvasMenuLabel">UCAR-VIE</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link text-white">Tableau de bord</a></li>
          <li class="nav-item mb-2"><a href="demande.php" class="nav-link text-white">Demande</a></li>
          <li class="nav-item mb-2"><a href="etudiant.php" class="nav-link text-white">Etudiant</a></li>
          <li class="nav-item mb-2"><a href="stage.php" class="nav-link text-white">Stage</a></li>
          <li class="nav-item mb-2"><a href="tuteur.php" class="nav-link text-white">Tuteur</a></li>
          <li class="nav-item mb-2"><a href="utilisateur.php" class="nav-link text-white">Utilisateur</a></li>
          <li class="nav-item mt-4"><a href="deconnexion.php" class="nav-link text-danger">Déconnexion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="main-content p-4">