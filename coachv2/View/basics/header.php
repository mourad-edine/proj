<!DOCTYPE html>
<html lang="en">
<head>
    <title>fitness</title>
  <link rel="stylesheet" href="<?php echo ASSETS;?>apk.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>
<body>

  <header class="header" style="background: #eee;">
    <div class="logo">
      <a href="#" class="text-decoration-none"><i class="fas fa-medal"></i>My fit</a>
    </div>
    <div class="d-flex justify-content-start">
      <h6 class="m-3 font-thin">ADMIN/</h6>
      <span class="pt-3">REGLER PAYEMENT</span>
    </div>

    <div class="header-icons">
      <i class="fas fa-bell"></i>
      <div class="account">
        <h6>ADMIN</h6>
      </div>
    </div>
  </header>
  <div class="container">
    <nav style="background-color: #eee;">
      <div class="side_navbar" >
        <span>Menu principal</span>
        <a href="dashboard" class="active"><i class="fas fa-home "></i>page d'accueil</a>
        <a href="coach"><i class="fas fa-user-circle"></i>gerer coach</a>
        <a href="client"><i class="fas fa-users"></i>gerer client</a>
        <a href="#"><i class="fas fa-credit-card"></i>liste matériel</a>
        <a class="text-dark dropdown-toggle fro" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa fa-plus" aria-hidden="true"></i> gestion salle
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">ajouter client</a></li>
            <li><a class="dropdown-item" href="#">ajouter coach</a></li>
            <li><a class="dropdown-item" href="#">ajouter materiel</a></li>
        </ul>
        
        <a class="text-dark dropdown-toggle fro" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa fa-plus" aria-hidden="true"></i> plus
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Admin</a></li>
            <li><a class="dropdown-item" href="logout">se déconecter</a></li>
        </ul>
      </div>
    </nav>
