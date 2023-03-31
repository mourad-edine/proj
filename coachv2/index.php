
    <?php
    require_once("config.php");
    require_once(ROUTES.'Routeur.php');
    $requette = $_GET['url'];
    $routeur = new Routeur($requette);
    $routeur->renderController();
    ?>