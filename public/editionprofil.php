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


if(isset($_SESSION['id']))
{
  
    $requser = $bdd->prepare("SELECT * FROM users WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if(isset($_POST['newNom']) && !empty($_POST['newNom']) && $_POST['newNom'] != $user['nom'])
    {
        $newNom = htmlspecialchars($_POST['newNom']);
        $insertnom = $bdd->prepare("UPDATE users SET nom =? WHERE id =?");
        $insertnom->execute(array($newNom, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }

    if(isset($_POST['newemail']) && !empty($_POST['newemail']) && $_POST['newemail'] != $user['email'])
    {
        $newemail = htmlspecialchars($_POST['newemail']);
        $insertemail = $bdd->prepare("UPDATE users SET email =? WHERE id =?");
        $insertemail->execute(array($newemail, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }

               
}

   


    if(isset($_POST['newpassword']) && !empty($_POST['newpassword']))
    {
        
        $newpassword = sha1($_POST['newpassword']);
        $insertpassword = $bdd->prepare("UPDATE users SET password =? WHERE id =?");
        $insertpassword->execute(array($newpassword, $_SESSION['id']));
       
    }



?>


<div align="center">

<h2>Editer mon profil  </h2>
<form method="POST" action="" enctype="multipart/form-data">
    <label> NOM:</label>
    <input type="text" name="newNom" placeholder="nom" value="<?php echo $user['nom']; ?>"/><br/><br/>
    <label> Email:</label>
    <input type="text" name="newemail" placeholder="email" value="<?php echo $user['email']; ?>"/><br/><br/>
    <label> Mot de passe:</label>
    <input type="text" name="newpassword" placeholder="password" /><br/><br/>
    <label> Avatar: </label>
    <input type="file" name="avatar" /><br/><br/>
    
 <input type="submit" value="enregistrer" />

</form>

</div>







 <?php require_once '../layout/footer.php'; ?>
