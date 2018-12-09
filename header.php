<?php
$estPrive=false;
require_once("config.php");
require_once CONTROLEUR_CONNEXION;
session_start();
function afficherHeader($titrePage, $nomCSS) {
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Book en ligne">
  <link rel="stylesheet" type="text/css" href="styles\general.css">
  <link rel="stylesheet" type="text/css" href="styles\header.css">
  <?php if($nomCSS) { ?>
    <link rel="stylesheet" type="text/css" href="styles\<?php echo $nomCSS ?>.css">
  <?php } ?>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <title><?php echo $titrePage ?></title>
</head>

<body>
  <div class="navbar-fixed">
    <nav>
    <div class="nav-wrapper">
      <a href="/testSite/index" class="brand-logo right"><img src="ressources/logo.gif" height="80" width="80"></img></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="/testSite/index">Acceuil</a></li>
        <li><a href="">Art</a></li>
        <li><a href="">About</a></li>
      </ul>
    </div>
  </nav>
  </div>

<?php
}
?>
