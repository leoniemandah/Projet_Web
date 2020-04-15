<?php
$title = "inscription";
require_once '../layout/header.php';

?>	
		
    </header>
  

<?php


$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'sfe2kktlJ9s8lEP9');

if(isset($_POST['inscription']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['telephone']))
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = sha1($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $telephone = htmlspecialchars($_POST['telephone']);

$insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, email, numeroTelephone, password) VALUES(?, ?, ?, ?, ?)");
$insertmbr ->execute(array($nom, $prenom, $email, $telephone, $password));
$erreur ="Votre compte a bien été créé !";

}
else{
    $erreur = "Tous les champs doivent etre complété";
}

}
?>




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

