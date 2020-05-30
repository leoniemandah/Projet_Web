<?php
$title = "inscription";
require_once '../layout/header.php';

?>	
		
    </header>
    <img src="/img/un.jpg" id="baniere"/>

<?php
//connexion à la base de donnée

$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'4Bm1GmFMVrBL0W0E');

//on vérifie que les champs ne sont pas vides
if(isset($_POST['inscription']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['telephone']))
{

    // on sécurise les champs
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);
    $telephone = htmlspecialchars($_POST['telephone']);

    //on prepare la requette sql pour ensuite l'insérer dans la base de donnée
$insertmbr = $bdd->prepare("INSERT INTO users (nom, prenom, email, numeroTelephone, password) VALUES (?, ?, ?, ?, ?)");
$insertmbr ->execute(array($nom, $prenom, $email, $telephone, $password));
$_SESSION['comptecréé'] = "Votre compte a bien été créé !";

// on fait une redirection sur la page index
header('Location: index.php');

}

//on affiche un message d'erreur si les champs ne sont pas rempli
else{
    $erreur = "Tous les champs doivent etre complété";
}

}
?>



<figcaption>
  
  <div class="container">  
       
<div align="center">
<h1>Formulaire d'inscription</h1>
<br/><br/><br/>
<form method="POST">

              <label>Nom :</label>  <input type="text" placeholder="Entrer nom" name="nom" required>
              <label>Prénom :</label>  <input type="text" placeholder="Entrer votre prenom" name="prenom" required>
              <label>email :</label>  <input type="text" placeholder="email" name="email" required>
              <label>mot de pass :</label>  <input type="text" placeholder="mot de passe" name="password" required>
              <label>Numéro de Téléphone :</label>  <input type="text" placeholder="Telephone" name="telephone" required>
              
                <input type="submit" id='submit' name="inscription" value="je m'inscris" >

</form>
<?php
if(isset($erreur))
{
    echo '<font color="red">' . $erreur . "</font>";
}
?>
</div>

</div>
  
  </figcaption>

  </body><br/>



<?php require_once '../layout/footer.php'; ?>
