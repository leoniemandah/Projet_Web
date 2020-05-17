<?php
$title = "profil";
session_start();
require_once '../layout/header.php';

?>	
		
    </header>
    


<?php


$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'4Bm1GmFMVrBL0W0E');





if(isset($_GET['id']) && $_GET['id'] > 0)
{
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>



<h1>Profil de <?php echo $userinfo['nom']; ?> </h1>
<br/><br/>

<br/>
Nom:<?php echo $userinfo['nom']; ?> 
<br/>
Mail:<?php echo $userinfo['email']; ?> 
<br/>






    
<?php

if(isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id'])
{
?>
    <a href="editionprofil.php">Editer le profil</a>
    <a href="deconnexion.php">Se deconnecter</a>    
 <?php
}
?>


<?php  


}

?> 






    <?php require_once '../layout/footer.php'; ?>
