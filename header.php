<?php include "conn.php";?>   
<html>
   <head>
      <title>
         RateYourShow.Com
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
      <link rel="stylesheet" href="style.css?key=<?php echo date('h'); ?>"/>
      <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <script src="js/logout.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   </head>
   <body class="container-md container-lg">
      <header>
         <nav id="topnav" class="container-md navbar navbar-expand-lg bg-black bg-gradient">
            <div class="container-fluid">
               <button style="color:white !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <!-- Loggin Control - BEGGINING-->
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                        </a>
                        <ul class="dropdown-menu">                    

                           <?php    
                               session_start();  
                              if (isset($_SESSION['nickname']) && strlen($_SESSION['nickname']) > 1) {
                                 echo '<li><a class="dropdown-item" href="#"><i class="fa-regular fa-star" style="color: #000000;"></i> My Ratings</a></li>';
                                 echo '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#"><i class="fa-solid fa-right-from-bracket" style="color: #000000;"></i> Logout</a></li>';
                               } else {                               
                                 echo '<li><a class="dropdown-item" href="login.php"><i class="fa-solid fa-key" style="color: #000000;"></i> Login</a></li>';
                                 echo '<li><a class="dropdown-item" href="register.php"><i class="fa-regular fa-id-card" style="color: #000000;"></i> Register</a></li>';
                              } 
                           ?>
                        </ul>
                     </li>
                     <!-- Loggin Control - END -->

                     <li class="nav-item" >
                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house" style="color: #ffffff;"></i> Home</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-tv" style="color: #ffffff;"></i> Shows
                        </a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="showCatalog.php?cat=Movies"><i class="fa-solid fa-film"></i> Movies</a></li>
                           <li><a class="dropdown-item" href="showCatalog.php?cat=TV"><i class="fa-solid fa-tv"></i> TV</a></li>
                           
                           <?php
                              if (isset($_SESSION['nickname']) && strlen($_SESSION['nickname']) > 1) {
                                 echo "<li><hr class='dropdown-divider'/></li>";
                                 echo "<li><a class='dropdown-item' href='addrating.php'><i class='fa-solid fa-pen' style='color: #000000;'></i> Write a Rating</a></li>";
                              }
                           ?>
                        </ul>
                     </li>
                  </ul>
                  <form class="d-flex" role="search">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i> Search</button>
                  </form>
               </div>
            </div>
         </nav>
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img\headerNew.png" class="d-block w-100 custom-carousel-image" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="img\1.jpg" class="d-block w-100 custom-carousel-image" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Recommend Your Favorite Show!</h5>
                     <p>Write you very own reviews.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img\2.jpg" class="d-block w-100 custom-carousel-image" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Invite your friends!</h5>
                     <p>Be toghether part of a passionate community.</p>
                  </div>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
         </div>
      </header>
      <section id="mainBody">

      <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
               Are you sure you want to leave ?
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
               <button type="button" class="btn btn-primary" id="btnLogout" onclick="Logout()">Yes</button>
               </div>
            </div>
         </div>
         </div>
      </div>