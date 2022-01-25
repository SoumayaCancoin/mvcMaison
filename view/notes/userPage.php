<!DOCTYPE html>
<html lang="FR">
<head>
    <!--iclude head -->
<?php require_once 'view/layout/headuserpage.php'; ?>
</head>
<body>
    <header>
       <!-- Navbar  -->
      
      <nav class="navbar navbar-expand-lg navbar-dark  ">
         <div class="container-fluid">
           <!-- ----Logo----- -->
            <a href="index.html" class="navbar-brand nav-link"><img src="<?php echo IMG_PATH;?>logo.png" alt="logo" class="logo">MyBeard</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             </button>
             <div class="collapse navbar-collapse container-fluide " id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <!-- the projects drop dow button -->
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes projets</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Projet1</a></li>
                    <li><a class="dropdown-item" href="#">Projet2</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Ajouter un projet</a></li>
                   </ul>
                </li>
                <!-- the project drop dow button -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Mes favoris </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Projet</a></li>
                    <li><a class="dropdown-item" href="#">Ajouter un projet</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Supprimer un projet</a></li>
                  </ul>
                </li>
             </ul>
             <!-- search form -->
                <form class="d-flex mr-2  justify-content-end">
                  <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                  <button class="btn btn-outline" type="submit">Search</button>
                </form>
                <figure class="figure ">
                  <img src="<?php echo IMG_PATH;?>icone.png" class="figure-img img-fluid rounded float-end " alt="...">
                    <figcaption class="figure-caption text-center">N.P</figcaption>
                </figure>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!-- bady of page  -->
     <div class="container w-75 rounded-bottom container-nav-2">
        <div class="row  ">
          <!-- the first menu  -->
           <div class="col border-end">
            <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo IMG_PATH;?>projet_icone.png" class="figure-img img-fluid " alt="...">  Nom de projet
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Modifier</a></li>
            </ul>
          </div>
        <div class="col border-end">
    
            <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo IMG_PATH;?>description_icone.png" class="figure-img img-fluid " alt="..."> Description
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Ajouter description</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Supprimer descript</a></li>
            </ul>
       
        </div>
          <div class="col border-end">
            <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo IMG_PATH;?>equipe.png" class="figure-img img-fluid " alt="..."> Equipe
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">N.P</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </div>
        <div class="col">
          <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo IMG_PATH;?>ajouter_icone.png" class="figure-img img-fluid " alt="...">   Inviter
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Projet</a></li>
            <li><a class="dropdown-item" href="#">Ajouter un projet</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Supprimer un projet</a></li>
          </ul>
          </div>
        </div>
      </div>
      <!-- choosing the card color div -->
      <div class="container w-50 rounded-bottom container-nav-2 ">
        <h5 class='text-center'>veuillez choisir les cartes pour vos tableaux </h5>
        <div class="container overflow-hidden">
          <div class="row gx-5">
            <div class="col">
              <div class=" p-3   post-it-pearple"></div>
            </div>
            <div class="col">
              <div class="p-3   post-it-orange"></div>
              </div>
            <div class="col">
              <div class="p-3  post-it-green"></div>
              </div>
            <div class="col">
              <div class="p-3  post-it-blue"></div>
              </div>
            <div class="col">
              <div class="p-3  post-it-yellow"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- list div  -->
        <div class="container   d-flex justify-content-start gap-3 row flex-row flex-nowrap  overflow-scroll"style="margin-left:0px;margin-top:10px  ">
          <div class="card card-aside " > </div>
          <div class="card bg-transparent card-table" >
            <div><h5 class="card-title text-center bg-light " >Titre</h5></div>
                 <div class="card-body overflow-auto bg-light ">
                    <p class="card-text post-it-pearple" style="transform: rotate(0);">
                       This stretched link</a> will only be spread over the p-tag, because a transform is applied to it.
                    </p>  
            </div>
          </div>
        </div>
         <?php
            require_once 'view/layout/error.php';
            //var_dump($data['notes']->getTitle());
        ?>
  </main>
     <!-- --------Footer---------- -->
    <?php require_once 'view/layout/footer.php'; ?>
</body>
</html>
