<?php
$title = "Devenir hôte";
require_once '../layout/header.php';

?>


</header>

<img src="/img/g.jpg" id="baniere"/>


<?php
// connexion à la base de donnée
$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'4Bm1GmFMVrBL0W0E');

//on vérifie que les champs ne sont pas vides
if(isset($_POST['inscription']))
{
    if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['text']))
{

  // on sécurise les champs
    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['mail']);
    $tel = htmlspecialchars($_POST['tel']);
    $text = htmlspecialchars($_POST['text']);

    //on prepare la requette sql pour ensuite l'insérer dans la base de donnée

$insertmbr = $bdd->prepare("INSERT INTO host (nom, mail, tel, text) VALUES (?, ?, ?, ?)");
$insertmbr ->execute(array($nom, $mail, $tel, $text));

header('Location: index.php');

}
else{
    $erreur = "Tous les champs doivent etre complété";
}

}
?>




<figcaption>
  
  <div class="container">  
    <form id="contact" action="" method="post">
    
      <h2>Formulaire d'inscription</h2>
      
      <fieldset>
        <input placeholder="Nom et prénom" type="text" name="nom" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Email" type="email" name="mail" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Numéro de téléphone (facultatif)" name="tel" type="tel" tabindex="3">
      </fieldset>
      <br>
      <fieldset>
        <textarea placeholder="Pourquoi voulez-vous devenir hôte?...." name="text" tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="inscription" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
      </fieldset>
    </form>
  </div>
  
  </figcaption>

  </body><br/>



<?php require_once '../layout/footer.php'; ?>






