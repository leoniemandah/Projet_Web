<?php
$title = "connexion";
require_once '../layout/header.php';

?>	
		
    </header>
    


<?php

session_start();

$bdd = new PDO( "mysql:host=localhost;dbname=airbnb",
"airbnb",
'4Bm1GmFMVrBL0W0E');

if(isset($_POST['connexion']))
{
    $username = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);
    if(!empty($username) && !empty($password))
    {
          $requser = $bdd->prepare("SELECT * FROM users WHERE nom = ? AND password = ?");
          $requser->execute(array($username, $password));
          $userexist = $requser->rowCount();
          if($userexist == 1)
          {
             $userinfo = $requser->fetch();
             $_SESSION['id'] = $userinfo['id'];
             $_SESSION['nom'] = $userinfo['nom'];
             $_SESSION['password'] = $userinfo['password'];
             header('Location: profil.php?id='.$_SESSION['id']);
          }else{
              $erreur = "Mauvais identifiants !";
          }
    }
    else{
        $erreur = "Tous les champs doivent être complété";
    }
}
?>


    <img src="/img/un.jpg" id="fond"/>

<figcaption>
        <div id="login">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
              <center><h1>Connexion</h1></center>  
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' name="connexion" value='Se connecter' >
               
            </form>
            <?php
if(isset($erreur))
{
    echo '<font color="red">' . $erreur . "</font>";
}
?>
        </div>
    <br/>
</figcaption>

    <?php require_once '../layout/footer.php'; ?>
