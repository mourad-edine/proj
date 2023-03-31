<?php require_once("config.php");
require_once('classes/Routeur.php');
$requette = $_GET['url'];
$routeur = new Routeur($requette);
$routeur->renderController();


content: [
"./index.html",
"./src/**/*.{js,ts,jsx,tsx}"

?>
