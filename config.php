<?php
  error_reporting( E_ALL );
  ini_set('display_errors', 1);

  define("SGBD", "mysql");
  define("NOM_BD", "testSite");
  define("NOM_HOTE_BD", "localhost");
  define("NOM_USAGER_BD", "siteLeoPub");
  define("MDP_USAGER_BD", "L6h4Mkttah4l5MZm");

  $dsn = 'mysql:dbname=lookingpywroot;host=lookingpywroot.mysql.db';
  $user = 'siteLeoPub';
  $password = 'looking4partyAdmin';

  $prefixePrive =null;
  if ($estPrive) $prefixePrive="../";

  require_once $prefixePrive."DAO/ConnexionBDD.php";
  define("CHEMIN_WEB_IMAGE", $prefixePrive."ressources");

  define("DAO_ART", $prefixePrive."DAO/ArtDAO.php");
  define("MODELE_ART", $prefixePrive."modele/Art.php");
  define("CONTROLEUR_ART", $prefixePrive."controleur/controleurArt.php");

  define("DAO_ADMIN", $prefixePrive."DAO/AdminDAO.php");
  define("MODELE_ADMIN", $prefixePrive."modele/Admin.php");
  define("CONTROLEUR_ADMIN", $prefixePrive."controleur/controleurAdmin.php");

  define("CONTROLEUR_CONNEXION", $prefixePrive."controleur/controleurConnexion.php");
 ?>
