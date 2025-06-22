<?php require_once("header.php"); ?>
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

  <?php require_once("footer.php"); ?>
