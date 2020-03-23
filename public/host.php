<?php
$title = "Devenir hôte";
require_once '../layout/header.php';

?>


</header>

<h2>Formulaire d'inscription</h2><br/>
<form method="POST">
  <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
  <fieldset>
    <legend>Contact</legend>
      <label for="nom">Nom <em>*</em></label>

      <input id="nom" placeholder="Leonie Mandah" autofocus="" required=""><br>
      <label for="telephone">Portable</label>
      
      <input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
      <label for="email">Email <em>*</em></label>
      <input id="email" type="email" placeholder="prenomnom@gmail.com" required="" pattern="[a-zA-Z]*[a-zA-Z]*@gmail.com"><br>
  </fieldset>
  <fieldset>
    <legend>Information personnelles</legend>
      <label for="age">Age<em>*</em></label>
      
      <input id="age" type="number" placeholder="xx" pattern="[0-9]{2}" required=""><br>
      <label for="sexe">Sexe</label>
      <select id="sexe">
        <option value="F" name="sexe">Femme</option>
        <option value="H" name="sexe">Homme</option>
      </select><br>
      <label for="comments">Pourquoi voulez-vous devenir host?</label>
      <textarea id="comments"></textarea>
  </fieldset>
 
  
  <p><input type="submit" value="Soummettre"></p>
</form>




<?php require_once '../layout/footer.php'; ?>






