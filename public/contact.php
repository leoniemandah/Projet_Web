<?php

session_start();

$title = "Contact";
require_once '../layout/header.php';

?>
</header>
 


<?php
//connexion à la base de donnée

$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'4Bm1GmFMVrBL0W0E');

//on vérifie que les champs ne sont pas vides
if(isset($_POST['contact']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['sujet']))
{

    // on sécurise les champs
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['sujet']);

    //on prepare la requette sql pour ensuite l'insérer dans la base de donnée
$insertmbr = $bdd->prepare("INSERT INTO contact (nom, prenom, email, sujet) VALUES (?, ?, ?, ?)");
$insertmbr ->execute(array($nom, $prenom, $email, $sujet));
$_SESSION['contact'] = "Votre message a bien été envoyé !";

// on fait une redirection sur la page index
header('Location: index.php');

}

//on affiche un message d'erreur si les champs ne sont pas rempli
else{
    $erreur = "Tous les champs doivent etre complété";
}

}
?>




 


<center><form style="position: relative;" method="POST">

<center><h1>Nous contacter</h1>
				 <br/>
				 <br/>
   <p>Vous avez besoin d'un conseiller? ou besoin de poser vos questions? Merci de bien vouloir remplir ce formulaire nous reviendrons vers vous dans un bref délais</p>
</center><br/>


	<img src="/img/tel.jpg"  />
	
	<div style="position: absolute; left: 100px; top: 250px; right: 20px; width:80%"> 
	
	          <label>Nom :</label>  <input type="text" placeholder="Entrer nom" name="nom" required>
              <label>Prénom :</label>  <input type="text" placeholder="Entrer votre prenom" name="prenom" required>
              <label>email :</label>  <input type="text" placeholder="email" name="email" required>
			  <label>Sujet :</label> 
			  <select name="sujet">
				  <option value="1">Bugs</option>
				  <option value="2">Dons</option>
				  <option value="3">Partenariat</option>
				  <option value="4">Autres</option>
			  </select>
			  
                <input type="submit" id='submit' name="contact" value="envoyer" >

    </div>
</form></center>

              





<?php require_once '../layout/footer.php'; ?>