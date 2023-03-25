

<?php
include_once('../config.php');
require_once(VIEW.'header.php');?>
    <div>
        <h4>
            
            
            <?php if(isset($_GET['texte'])){
                 $texte = $_GET['texte'];
                 if($texte == 'reussi'){
                    echo '<h1 class="text-success">ajouté avec success</h1>';
                 }else if($texte == 'echec'){
                    echo '<h1 class="text-danger">ajouté avec success</h1>';
                 }else if($texte == 'toutremplir'){
                    echo '<h1 class="text-danger">veuillez tout remplir svp</h1>';
                 }else if($texte == 'pasdevaleurparlebouton'){
                    echo '<h1 class="text-danger">pas de valeur revoyé pas le bouton</h1>';
                 }else{
                    echo "";
                 }
                }
            
            ?></h4>

<?php
require_once(VIEW.'ajoute.php');
require_once(VIEW.'footer.php');?>