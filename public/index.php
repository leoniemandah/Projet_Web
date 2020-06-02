<?php

session_start();

$title = "Accueil";
require_once '../layout/header.php';

?>

</header>



<div class=" overlay-image _bo "><a href="URL_LIEN">
    <img class=" image _bp " src="/img/k.jpg" alt="Alt text" />
    <div class=" text _q ">Trouver le meilleur endroit pour vivre</div>
  </a>
</div>




<div class="wrap">
  <div class="search">
    <input type="text" name="q" class="searchTerm" placeholder="Recherchez par ville">
    <button type="submit" class="searchButton">
      <i class="fa fa-search"></i>
    </button>
  </div>
</div>











<main>

  <h1>Trouver ici la solution pour vous loger</h1>


  <div id="conteneur">

    <div class="card" style="width: 15rem;">
      <img src="img/lyon.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lyon</h5>
        <p class="card-text">Réservez pour toutes vos destinations à petit prix.</p>
        <a href="lyon.php">Visiter</a>
      </div>
    </div>

    <div class="card" style="width: 15rem;">
      <img src="img/marseille2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Marseille</h5>
        <p class="card-text">Réservez pour toutes vos destinations à petit prix.</p>
        <a href="marseille.php">Visiter</a>
      </div>
    </div>


    <div class="card" style="width: 15rem;">
      <img src="img/paris.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Paris</h5>
        <p class="card-text">Réservez pour toutes vos destinations à petit prix.</p>
        <a href="paris.php">Visiter</a>
      </div>
    </div>

  </div>

</main>

<h2>Ils nous ont fait confiance...</h2><br />
<div id="container">
  <section>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <h3>Leila</h3>
    <q>Tout confort, nous n'avons remarqué aucun soucis dans ce logement, je recommande.</q>
  </section>

  <section>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <i class="fas fa-star"></i>
    <h3>Joshua</h3>
    <q>Tout était parfait. Accueil et confort de la chambre ,chambre plus grande que prévue merci à la direction et au Corona ? Lit assez haut mais pratique et confortable</q>
  </section>

</div>


<?php require_once '../layout/footer.php'; ?>