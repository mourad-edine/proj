<?php require_once(BASICS.'header.php');?>
  <style>
      .mar{

          width: 820px;
      }
      .promo_card{
        width: 790px;
      }
  </style>
  <section  style="background-color: #eee;width: 850px; height: 700px;">
  <div class="main-b">

  <div class="py-5">
  <table class="table mar">
  <div style="width: 820px;">
<!-- eto le get verif -->
  </div>
    <thead>
      <tr class="text-white bg-secondary">
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">specialité</th>
        <th scope="col">prix</th>
        <th scope="col">option</th>
        <th scope="col">info</th>
        <th>p/nne supervisé</th>
        <th>profil</th>
      </tr>
    </thead>
    <tbody>
    <?php
      //nombre coach
      if($affiche){
      foreach($affiche as $liste) {?>
      <tr>
        <?php require_once(MODALS.'Modals.php');?>
        <th scope="row"><?php echo $liste->getId()?></th>
        <td><?php echo $liste->getNom()?></td>
        <td><?php echo $liste->getSpecialite()?></td>
        <td><?php echo $liste->getPrix()?></td>
        
        <td scope="col"><button type="submit" class="btn btn-primary "data-bs-toggle="modal" data-bs-target="#modif">modifier</button></td>
        <td scope="col"><button type="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm">supp</button></td>

        
        <td><i class="fa fa-bell text-success"></i></td>
      <td scope="col"><button type="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#profil">profil</button></td>
      </tr>
      <?php
      }
    }else{
      echo'';
    }
      ?>
    </tbody>
  </table>
  </div>
  </div>
  </section>
  <?php require_once(BASICS.'footer2.php');?>