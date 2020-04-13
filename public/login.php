<?php
$title = "connexion";
require_once '../layout/header.php';

?>	
		
	</header>
    <img src="/img/un.jpg" id="fond"/>

<figcaption>
        <div id="login">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
              <center><h1>Connexion</h1></center>  
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    <br/>
</figcaption>

    <?php require_once '../layout/footer.php'; ?>
