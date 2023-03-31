<?php require_once(BASICS.'header.php');?>
<style>
  .pile{
    width: 150px;
    height: 150px;
  }
  .main-bo{
    width: 700px;
  }
</style>
<?php




?>
<section style="background-color: #eee;width: 850px;height: 700px;padding: 20px;">   
<div class="main-bo" style="margin-left: 50px;">
      <div class="promo_card" style="margin-top: -20px; width: 695px;margin-left: -15px;">
        <h2>espace de travail</h2>
        <span>donnez le meilleur de vous même!</span>
      </div>
       
      <!----voilà voilà -->
      <div class="row mt-5 text-white">
      <div class="col-lg-4 bg-info pile rounded">
         <h5 class="">nombre de matériel</h5>
         <h1 class="px-5"><?php echo $nombre->compter('materiel');?></h1>
      </div>
      <div class="col-lg-4 bg-success pile rounded">
         <h5>nombre de client</h5>
         <h1 class="px-5"><?php echo $nombre->compter('client');?></h1>
      </div>
      <div class="col-lg-4 bg-primary pile rounded">
         <h5>nombre d'employé</h5>
         <h1 class="px-5"><?php echo $nombre->compter('employe');?></h1>
      </div>
      <div class="col-lg-4 bg-danger pile rounded">
         <h5>cours</h5>
         <h1 class="px-4"><?php echo $nombre->compter('cours');?></h1>
      </div>

    <div class="d-flex" style="margin-left: 48px;"><?php
     ?>
     </div>
    </section> 
    <script src="/js/index.js"></script>


<?php require_once(BASICS.'footer2.php');?>