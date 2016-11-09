<?php
$donnees ['page_title'] = "Guillaume Nédélec";
$donnees ['part'] = "";
$index = true;
?>

<?php include("html-php/header.php"); ?>
<link rel="stylesheet" href="css/layout.css"  charset="utf-8">
<?php //include("html-php/menu.php"); ?>

<section class="container"> <!-- class="container" -->
  <a href="html-php/CV.php">
    <div class="row">
      <div class="col-md-4">
        <img src="images/logo_cv.png" alt=""/>
      </div>
      <div class="col-md-8"><strong>Mon CV en ligne</strong>
        <p>Consultez mon parcours professionnel, mes compétences ainsi que mes centres d'intrêts !</p>
      </div>
    </div>
  </a>
  <a href="html-php/studiesProjects.php">
    <div class="row">
      <div class="col-md-8"><strong>Mes projets étudiant</strong>
        <p>Quelques projet réalisés pendant mes 2 années à l'IUT de Bordeaux dans le département informatique</p>
      </div>
      <div class="col-md-4">
        <img src="images/myproject.png" alt=""/>
      </div>
    </div>
  </a>
  <a href="html-php/personalProjects.php">
    <div class="row">
      <div class="col-md-4">
        <img src="images/myproject2.png" alt=""/>
      </div>
      <div class="col-md-8"><strong>Mes projets personnels</strong>
        <p>Le fruit de mon imagination en Web, C++, ou encore C#</p>
      </div>
    </div>
  </a>
</section>

<?php include("html-php/footer.php"); ?>
