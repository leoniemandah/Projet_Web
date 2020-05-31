<?php
$title = "Paris";
session_start();
require_once '../layout/header.php'; ?>


</header>
<main>


<figure>
        <img src="img/paris.jpg" alt="" /> 
            <figcaption>
                
                <h1>Paris</h1>
            
             <p>Paris, capitale de la France, est une grande ville européenne et un centre mondial de l'art, de la mode, de la gastronomie et de la culture. 
             Son paysage urbain du XIXe siècle est traversé par de larges boulevards et la Seine. 
             Outre les monuments comme la tour Eiffel et la cathédrale gothique Notre-Dame du XIIe siècle, la ville est réputée pour ses cafés et ses boutiques de luxe bordant la rue du Faubourg-Saint-Honoré.
             </p>
            </figcaption>
</figure>
   
</main>

  </br>
  </br>
 <center> <div class="text">Réservez votre chambre pour votre séjour à Paris</div></center>
  </br>

<div id="conteneur">
    <div class="card" style="width: 12rem;">
      <img src="img/lyon.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lyon</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="lyon.php">Réservez</a>
      </div>
    </div>

    <div class="card" style="width: 12rem;">
      <img src="img/marseille2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Marseille</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="marseille.php">Réservez</a>
      </div>
    </div>


    <div class="card" style="width: 12rem;">
      <img src="img/paris.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Paris</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="paris.php">Réservez</a>
      </div>
    </div>

  </div>
  

       



<?php require_once '../layout/footer.php'; ?>