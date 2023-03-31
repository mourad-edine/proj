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
<div style="width: 820px;margin-left: 16px;"><?php ?></div>
<div class="main-body">
  
<div class="py-5">
<table class="table mar">
<thead>
    <tr class="bg-secondary text-white">
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">option1</th>
      <th>option2</th>
      <th>nombre de reservation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($clients){
    foreach($clients as $liste) {?>
    
  <tbody>
    <tr>
      <th scope="row"><?php echo $liste->getId();?></th>
      <td><?php echo $liste->getNom()?></td>
      <td><?php echo $liste->getPrenom();?></td>
      <td><?php echo $liste->getAge();?></td>
      <?php echo '
      <form method="POST" action="profil">
            <td scope="col">
            <input type="hidden" name = "id" value="'.$liste->getId().'">
            <input type="submit" name = "data" value="voir detail" class="btn btn-primary">
            </td>
      </form>           ';
      ?>
      <td></td>
     <td ><?php
     if($total->compterReservation($liste->getId()) > 0){
       echo '<a href="#" class=""><i class="fas fa-bell text-success"></i>reservation : '.$total->compterReservation($liste->getId()).'</a>';   
     }else{
      echo "";
      
    }?>
     
    
      </td>
    </tr>
    
  </tbody>
 
  <?php
    }
  }else{
    echo'<h4 class="text-success">aucune donné !</h4>';
  }
    ?>
 
</table>
<?php

?>
</div>
</div>
</section>

<?php require_once(BASICS.'footer2.php');?>