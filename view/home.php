<section style="margin-bottom: 50px;">
    <?php 
    foreach($valeurquest as $result){ ?>
      <div style="display: flex;justify-content: center; align-items: center;margin-top: 30px;">
       <div class="">
        <p style="width: 1000px;"><?php echo $result->getDevinette();?> </p>
        <div class="dropdown">
        <button onclick="changer()" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            afficher reponse
        </button>
           <a href="delete?id=<?php echo $result->getId();?>">supprimer</a>
           <a href="#">modifier</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#"><?php echo $result->getReponse();?></a></li>
        </ul> 
        <div>

        </div>
        </div>
       </div>
    </div>
    <?php
    }

    ?>
  </section>
