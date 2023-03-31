<?php
require_once(OBJET.'databases.php');
require_once(OBJET.'Coach.php');
require_once(OBJET.'Clients.php');

class ControlModelisation extends Databases{
private $id;
public function verifierpayement(){
  
  if (isset($_GET['texte'])) { 
    if($_GET['texte'] == "succes"){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    payement éffectué avec success!
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
 }else if($_GET['error'] == "echec"){
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
   Echec du payement!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
   ';
 }else{
   echo '<div class="alert alert-warning alert-dismissible fade show tol" role="alert">
   erreur inconnue!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
   ';
 }
  }
}

public function getAllCoach(){
  $requette = "SELECT * FROM  coach";
  $valeur = $this->statement($requette);
  foreach($valeur as $valeurs){
    $coach = new Coach();
    $coach->setId($valeurs['id']);
    $coach->setNom($valeurs['nom']);
    $coach->setPrenom($valeurs['prenom']);
    $coach->setSpecialite($valeurs['specialite']);
    $coach->setPrix($valeurs['prix']);
    $coach->setProgramme_id($valeurs['programme_id']);
    $coach->setEmail($valeurs['email']);
    $coach->setNumero($valeurs['numero']);

    $coachs[] = $coach;
  }
  return $coachs;

}  

public function getAllclients(){
  $requette = "SELECT * FROM  client limit 0,5";
  $valeur = $this->statement($requette);
  foreach($valeur as $valeurs){
    $client = new Clients();
    $client->setId($valeurs['id']);
    $client->setNom($valeurs['nom']);
    $client->setPrenom($valeurs['prenom']);
    $client->setAge($valeurs['age']);
    $client->setPoid($valeurs['poid']);
    $client->setAdresse($valeurs['adresse']);
    $client->setEmail($valeurs['email']);

    $clients[] = $client;
  }
  return $clients;

} 

public function statement($requette){
  $statement = $this->connection()->prepare($requette);
  $statement->execute();
  $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $resultat;
}
public function signal($requette){
  $statement = $this->connection()->prepare($requette);
  $statement->execute();
  $resultat= $statement->fetch(PDO::FETCH_NUM);
  $nombre = $resultat[0];
  return $nombre;
}

public function compter($table){
  $requeste = "SELECT count(*) FROM $table";
  $valeur = $this->signal($requeste);
  return $valeur;
}

public function verifier(){

if (isset($_POST['submit'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['nom']);
	$pass = validate($_POST['passe']);

	if (empty($uname)) {
		header("Location: login?texte=nom");
	    exit();
	}else if(empty($pass)){
        header("Location: login?texte=passe");
	    exit();
	}else{
		    $requette = "SELECT * FROM client WHERE nom='$uname' AND mdp='$pass'";
        $statement = $this->connection()->prepare($requette);
        $statement->execute();
		    if ($statement->rowCount() == 1) {
            	header("Location: dashboard");
		        exit();
		}else{
			header("Location: login?texte=fauxnomoupasse");
	        exit();
		}
	}
	
}else{
	header("Location: login?texte=pasdelogin");
	exit();
}
}

public function verificationlogin(){
    if (isset($_GET['error'])) { 
       echo '<p class="error">'.$_GET['error'].'</p>';
    } 
}
public function verificationRegister(){
      if (isset($_GET['error'])) { 
         if($_GET['error'] == "enregistré avec succes"){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             enregistré avec succes!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else if($_GET['error'] == "veuillez tout remplir"){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            veuillez tout remplir!
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
          ';
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show tol" role="alert">
            erreur inconnue!
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
          ';
        }
   }
}

public function verificationEffecerCoach(){
  
  if (isset($_GET['texte'])) { 
    if($_GET['texte'] == "efface"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    coach éffacé avec success!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else if($_GET['texte'] == "erreur"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    erreur de suppression!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
  }else if($_GET['texte'] == "modifié"){
    echo '<div class="alert alert-success alert-dismissible fade show tol" role="alert">
    modifié avec succès!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
  }else if($_GET['texte'] == "echec"){
    echo '<div class="alert alert-warning alert-dismissible fade show tol" role="alert">
    erreur de modification!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
  }else{
    echo '<div class="alert alert-warning alert-dismissible fade show tol" role="alert">
    erreur!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
  }
  } 
}



public function compterReservation($id){
  $requette = "SELECT COUNT(cours.id) FROM client,cours,coach WHERE client.id = cours.id_client AND cours.id_coach = coach.id AND client.id = $id";
  $stat = $this->signal($requette);
  return $stat;

}

public function showProfil($id,$databases){
      $requette = "SELECT * FROM client $databases WHERE id = $id";
      $stat = $this->connection()->prepare($requette);
      $stat->execute();
      $rep = $stat->fetch();

      $client = new Clients();
      $client->setNom($rep['nom']);
      $client->setPrenom($rep['prenom']);
      $client->setEmail($rep['email']);
      $client->setAge($rep['age']);
      $client->setPoid($rep['poid']);
      $client->setAdresse($rep['adresse']);

      $clients[] = $client;

      return $clients;

}
}