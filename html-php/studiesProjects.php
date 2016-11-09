<?php
$donnees ['page_title'] = "Guillaume Nédélec - Projets Étudiants";
$donnees ['part'] = "Mes Projets Étudiants";
$index = false;
?>
<?php include("header.php"); ?>
<link rel="stylesheet" href="../css/project.css"  charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../css/bootstrap/js/bootstrap.min.js"></script>

<section class="container">
  <div class="row">
    <h1>Site Web</h1>
    <br><br>
    <div class="row" >
      <div class="container" >
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="../src/Equipements publics de Bordeaux/index.html" target="_blank">
                <img class="img-responsive center-block" src="../images/web/bordeauxGears2.png" alt="">

              <div class="carousel-caption">
                <h3>Les Équipements publics de Bordeaux</h3>
                <p>Un site réalisé en début de S2 utilisant du Javascript en complément du HTML/CSS.</p>
              </div>
            </a>
            </div>

            <div class="item">
              <a href="../src/La Surveillance Numérique/HTML/index.html" target="_blank">
                <img class="img-responsive center-block" src="../images/web/digitalSurveillance4.png" alt="">
              </a>
              <div class="carousel-caption">
                <h3>La Surveillance Numérique</h3>
                <p>Mon premier site présentant le bilan d'une étude sur le sujet.</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<section class="container">
  <div class="row">
    <h1>Jeu C++</h1>
    <br><br>
    <div class="row">
      <div class="container" >
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img class="img-responsive center-block" src="../images/jeu c++/pong.jpg" alt="">
            <div class="carousel-caption">
              <h3>Pong</h3>
              <p>Premier projet. Initiation à la programmation et à l'utilisation de la SDL</p>
            </div>
          </div>

            <div class="item">
              <img class="img-responsive center-block" src="../images/jeu c++/duckhunt.png" alt="">
              <div class="carousel-caption">
                <h3>Duck Hunt</h3>
                <p>Jeu programmé en bilan du Semestre 1 exploitant la bibliothèque graphique SDL</p>
              </div>
            </div>

            <div class="item">
              <img class="img-responsive center-block" src="../images/jeu c++/morpion.jpg" alt="">
              <div class="carousel-caption">
                <h3>Morpion</h3>
                <p>Initiation à la Programmation Orientée Objet et à l'utilisation de la SFML</p>
              </div>
            </div>

            <div class="item">
              <img class="img-responsive center-block" src="../images/jeu c++/runner.png" alt="">
              <div class="carousel-caption">
                <h3>The Yéti Runner</h3>
                <p>Bilan de Programmation Orientée Objet. Thème choisi par le binôme. Utilisation de la bibliothèque graphique SFML</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
