<?php
$title = "Réservez";
session_start();
require_once '../layout/header.php'; ?>

</header>


<div id="champs">
            <form method="post" action="">
            <p>
                
            <label for="date"></label> <!--case date-->
                <input type="date" name="dateArr" class="ecriture" id="date" placeholder="Date" size="35" maxlenght="100" /> <!--pseudo à l'intérieur de la case-->
            <br>     

                <label for="date"></label> <!--case date-->
                <input type="date" name="dateDep" class="ecriture" id="date" placeholder="Date" size="35" maxlenght="100" /> <!--pseudo à l'intérieur de la case-->
            <br>
             
              
                 
                <label for="letter"></label>    <!--case nom et prénom-->
                <input type="text" name="letter" class="ecriture" id="letter" placeholder="Nom et prénom" size="35" maxlength="100" /><!--mot de passe avec points et à l'intérieur de la case-->
            <br>
             
                <label for="number"></label>    <!-- Nombre de personnes-->
                <input type="number" name="number" class="ecriture" id="number" placeholder="Nombre de personne" size="35" maxlength="100" min="1" max="8"/><!--mot de passe avec points et à l'intérieur de la case-->
             
            </p>
            
            <p>
                <input type="submit" name="Résever" value="Réserver" class="boutons">
            </p>  <!--bouton de réservation-->
         
             </form>
             
         
        </div>  