<?php

/**
 * modal profil
 */
?>
 <!----  modal body----------------------------------------------------------------------------------------------------------------------->



<?php
 /**
  * fin modal profil
  */
  
  /**
   * modal confirmation
   */
  
  ?>

<div class="modal fade" id="confirm" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          voulez-vous vraiment supprimer?
        </div>
        <div class="modal-footer">
          <form action="delete" method="POST">
          <?php echo '<input type="text" name = "id" value="'.$liste->getId().'">'?>
            <input type="submit" href="/php2/temporaire2.php" class="btn btn-danger" name ="delete" value="supprimer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">non</button>
          </form>  
        </div>
      </div>
    </div>
  </div>


  <?php

  /**
   * fin modal confirmation
   */

/**
 * modal modification update
 */

 ?>

   <!------------------------------------------------------------------>
   <div class="modal fade" id="modif" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">modification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex">
        <form action="update" method="POST">
        <div class="">
        <div class="" style="margin-left: 150px;">
          <div class="mb-3">
            <input type="hidden" name ="id_coach" value="<?php echo $liste->getId(); ?>">
          <input type="text" id="disabledTextInput" class="form-control" name="nom" value="<?php echo $liste->getNom();?>">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" name="specialite" value="<?php echo $liste->getSpecialite();?>">
          </div>
          <div class="mb-3">
            <input type="number" id="disabledTextInput" class="form-control" name="prix" value="<?php echo $liste->getPrix();?>">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="pays">
          </div>
          </div>
        </div>
        
        <!------------------------------------>

        <div class="">
          <div class="mb-3">
          <input type="text" id="disabledTextInput" class="form-control" name="prenom" value="<?php echo $liste->getPrenom();?>">
          </div>
          <div class="mb-3">
            <input type="number" id="disabledTextInput" class="form-control" name="numero" value="<?php echo $liste->getNumero();?>">
          </div>
          <div class="mb-3">
            <input type="email" id="disabledTextInput" class="form-control" name="email" value="<?php echo $liste->getEmail();?>">
          </div>
          <div class="mb-3">
            <input type="text" id="disabledTextInput" class="form-control" placeholder="pays">
          </div>
          </div>
          
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="modifier">enregistrer</button>
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">annuler</button>
      </div>
        <!------------------------------------>


        </div>
        
        </form>  
      </div>
      
    </div>
  </div>
    <!----------------------------------------------------------->   
