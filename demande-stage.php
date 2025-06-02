<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Demande de stage - UCAR-VIE</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>UCAR-VIE</h1>
    <nav>
      <a href="index.php">Accueil</a>
      <a href="about.php">À propos</a>
      <a href="contact.php">Contact</a>
      <a href="demande-stage.php">Demande de stage</a>
    </nav>
  </header>

  <main>
    <h2>Formulaire de demande de stage</h2>
    <form action="#" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required />

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required />

      <label for="domaine">Domaine de stage :</label>
      <input type="text" id="domaine" name="domaine" required />

      <label for="message">Message :</label>
      <textarea id="message" name="message"></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 UCAR-VIE</p>
  </footer>
</body>
</html>
