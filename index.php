<?php

require_once('templates/header.php');
require_once('lib/recipe.php');


?>


<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="./assets/images/logo-cuisinea.jpg" alt="" width="72">
    <h1 class="display-5 fw-bold text-body-emphasis">Cuisine made Home </h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
            most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Ingrédients</button>
            <a a href="recettes.php" class="btn btn-outline-secondary btn-lg px-4">
                Liste des recettes</a>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">

    <?php
    include('templates/recipe_partial.php');

    ?>
    <?php
    require_once('templates/footer.php');

    /* différence avec include : require est utilisé si le fichier "require" est absolument requis 
    pour les éléments non importants on peut faire un "include" qui ne génère pas de fatal error en
     cas d'absence , au contraire
    de require
    require_once et include_once : inclusion du fichier une seule fois */
    ?>