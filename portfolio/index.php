<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

?>

<?php include("./include/header.php"); ?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
switch($page){

    case 'projects':
        include("pages/projects.php");
        break;
    case 'bts':
        include("pages/bts_sio.php");
        break;
    case 'contact':
        include("pages/contactme.php");
        break;
    case 'entreprise':
        include("pages/entreprise.php");
        break;
            case 'veille':
        include("pages/veille.php");
        break;


    default :
        include("pages/accueil.php");
}

?>

<?php include("./include/footer.php"); ?>