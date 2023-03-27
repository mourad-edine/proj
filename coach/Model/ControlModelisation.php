<?php
require_once(OBJET.'databases.php');

class ControlModelisation extends Databases{
    
    

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
}