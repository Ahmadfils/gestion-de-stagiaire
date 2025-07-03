<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="card shadow p-4" style="max-width:400px; width:100%;">
        <h3 class="mb-4 text-center">Connexion</h3>
        <?php
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            // Exemple de vérification (à remplacer par la vraie logique)
            if ($email === 'admin@email.com' && $password === 'admin') {
                header('Location: index.php');
                exit;
            } else {
                $error = 'Email ou mot de passe incorrect.';
            }
        }
        if ($error) {
            echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Se connecter</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 