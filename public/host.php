<?php
$title = "Devenir hôte";
require_once '../layout/header.php';

?>


</header>

<body>
  <div class="container">  
    <form id="contact" action="" method="post">
    
      <h2>Formulaire d'inscription</h2>
      
      <fieldset>
        <input placeholder="Nom et prénom" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Email" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Numéro de téléphone (facultatif)" type="tel" tabindex="3" required>
      </fieldset>
      <select id="sexe">
        <option value="F" name="sexe">Femme</option>
        <option value="H" name="sexe">Homme</option>
      </select><br>
      <fieldset>
        <textarea placeholder="Pourquoi voulez-vous devenir host?...." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
      </fieldset>
    </form>
  </div>


  </body>


<?php require_once '../layout/footer.php'; ?>






