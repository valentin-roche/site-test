<?php
require_once DAO_ADMIN;
require_once MODELE_ADMIN;
if(isset($_POST['connexion'])){
    if(empty($_POST['pseudo'])){
        echo "Le champ Pseudo est vide.";
    }
    else{
        if(empty($_POST['motDePasse'])){
            echo "Le champ Mot de passe est vide.";
        }
        else{
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = htmlentities($_POST['motDePasse'], ENT_QUOTES, "ISO-8859-1");
            if(!AdminDAO::verifConnexion($_POST['pseudo'], $_POST['motDePasse'])){
                echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
            }
            else{
                session_start();
                $admin = AdminDAO::get($Pseudo);
                $_SESSION['pseudo'] = $Pseudo;
                $_SESSION['motDePasse'] = $admin->getmotDePasse();
                header( 'Location: index.php' );
            }
        }
    }
}
if(isset($_POST['deconnexion'])){
  session_start();
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  }
  session_destroy();
  header( 'Location: index.php' );
}
?>
