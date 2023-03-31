
<?php require_once(BASICS."header.php");?>


   
 <style>
    .main-bod{
      width: 750px;
    }
    .card-body{
      width: 400px;
      height: 300;
    }
 </style>
<?php 
  if(isset($_POST['data'])){
    $data =$_POST['id'];
  }else{
   $data ="";
  } 
   $clients = $client->showProfil($data,'client');

   foreach($clients as $resultat){?>
<section style="background-color: #eee;width: 850px;height: 700px;">
  <div class="container main-bod">
    <div class="row">
      <div class="col-lg-5">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="my-3" style="width: 100px;"><?php echo $resultat->getNom();?></h5>
            <div class="d-flex" style="width: 250px;">
              <button type="submit" class="btn btn-primary" value="<?php echo $resultat->getId();?>">modifier</button>
              <button type="button" class="btn btn-danger ms-1"class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm">supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">nom compte</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $resultat->getNom().'     '.$resultat->getPrenom();?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $resultat->getEmail();?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">age</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $resultat->getAge();?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">poid</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $resultat->getPoid()?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $resultat->getAdresse();?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
 <?php
};?>
</section>

<?php require_once(BASICS.'footer2.php');

