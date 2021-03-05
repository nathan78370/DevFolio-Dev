<?php
require_once("functions.php");
?>

<?php
    //session_start();
    include("./link.php");
    echo'
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a style="text-decoration:none" href="index.html#fond">PortFolio</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#fond">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Présentation</a></li>
            <li><a class="nav-link scrollto" href="#work">PortFolio</a></li>
            <li>
              <div class="container-fluid">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i>
                    </button>
                  </input>
                </form>
              </div>
            </li>';
        //if(verif_auth(INSCRIT))
        {echo'
            <li><a class="nav-link scrollto" href="login.html">Déconnexion</a>
            </li>';
        }
         //else
        {echo'
            <li><a class="nav-link scrollto" href="login.html">Connexion</a>
            </li>';
        }echo'
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>';
    ?>