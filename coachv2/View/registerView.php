<?php require_once(BASICS.'header1.php');?>
<form action="loginFiltre" method="post" style="width: 700px;">
<h2>register</h2>
<div style="width: 517px;margin-left: 60px;"> 
	   
</div>
<div>     
    <div>
     	<label>nom</label>
     	<input type="text" name="nom" placeholder="nom" class="form-control"><br>

     	<label>prenom</label>
     	<input type="text" name="prenom" placeholder="prenom" class="form-control"><br>

         <label>poid</label>
     	<input type="number" name="poid" value="18" min="18" max="500" placeholder="poid"class="form-control"><br>

         <label>age</label>
     	<input type="number" name="age"  value="1" min="1" max="100" placeholder="age" class="form-control"><br>
    </div>  
    <a href="login" class="text-white btn btn-primary">se connecter</a> 
     	<button type="submit" class="rounded mx-2 btn btn-primary" name="identifier">s'inscrire</button>
     </form>

</body>
</html>