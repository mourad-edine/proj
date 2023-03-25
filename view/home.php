<section style="margin-bottom: 50px;">
    <?php 
    foreach($resultat as $result){ ?>
      <div style="display: flex;justify-content: center; align-items: center;margin-top: 30px;">
       <div class="">
        <p style="width: 1000px;"><?php echo $result['devinette'];?> </p>
        <div class="dropdown">
        <button onclick="changer()" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            afficher reponse
        </button>
           <a href="Controllers/supprimer.php?id=<?php echo $result['id'];?>">supprimer</a>
           <a href="#">modifier</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#"><?php echo $result['reponse'];?></a></li>
        </ul> 
        <div>
          <p>date de mise en ligne : <?php echo $result['temps'];?></p>
        </div>
        </div>
       </div>
    </div>
    <?php
    }

    ?>
  </section>
