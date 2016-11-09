<!DOCTYPE html>
<?php
if($index ==true)
{
$linkerBootstrap = "css/bootstrap/css/bootstrap.min.css";
$linkerCSS = "css/master.css";
$linkerHomePage = "index.php";
$linkerLogo = "images/logo_site.png";
}
else
{
  $linkerBootstrap = "../css/bootstrap/css/bootstrap.min.css";
  $linkerCSS = "../css/master.css";
  $linkerHomePage = "../index.php";
  $linkerLogo = "../images/logo_site.png";
}
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href=<?php echo $linkerBootstrap;?>  charset="utf-8">
  <link rel="stylesheet" href=<?php echo $linkerCSS; ?> charset="utf-8">
  <link rel="icon" href=<?php echo $linkerLogo; ?> charset="utf-8">
  <title><?php echo $donnees ['page_title']; ?></title>
</head>

<?php
if ($donnees ['part'] != "")
{
  $tmp = $donnees ['part'];
  $donnees ['part'] = "— $tmp —";
}
?>

<body id="hautdepage">
  <div class="container">
    <header class="row">
      <div class="col-md-12">
        <h1><a href=<?php echo $linkerHomePage;?>>Guillaume NÉDÉLEC</a></h1>
        <h2><?php echo $donnees ['part']; ?></h2>
      </div>
    </header>
  </div>
