<?php
    require_once(BASICS.'header1.php');
?>
     <form action="verif" method="POST">
     	<h2>LOGIN</h2>
     	<label>nom</label>
     	<input type="text" name="nom" placeholder="nom" class="form-control"><br>

     	<label>mot de passe</label>
     	<input type="text" name="passe" placeholder="nom" class="form-control"><br>
        <div>
		<a href="register" class="mx-1 btn btn-primary">créez un compte?</a>
     	<button class="btn btn-primary" type="submit" name="submit">Login</button>
		 </div>
     </form>
</body>
</html>