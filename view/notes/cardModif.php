<!DOCTYPE html>
<html lang="FR">
    <head>
     <!--iclude head -->
      <?php require_once 'view/layout/head.php'; ?>
    </head>
    <body>
        <header>
       <!-- Navbar  -->
            <nav class="navbar  navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <a href="index.html" class="navbar-brand nav-link"><img src="<?php echo IMG_PATH;?>logo.png" alt="logo" class="logo">MyBeard</a>
            </div>
            </nav>
        </header>
        <main>
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="card shadow  card_connexion mb-2 p-5 " >
                    <div class="card-body p-4">
                        
                        <h3 class=" text-center mb-1">Modifier carte</h3>
                        <p>Vous pouvez modifier des informations sur la carte</p>
             <!-- -------------------card form------------- -->
                    <form>
                       
                        <!-- containd card input -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">ModifierContenue </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="form3Example3cg">Date de réalisation</label>
                            <input type="date"  class="form-control" name="date">
                        </div>
                        <a href="userPage.php">Retour</a>
                        <div class="d-flex justify-content-center mb-2">
                            <!-- validat button  -->
                            <button type="button" class="btn btn-light btn-secondary btn-lg gradient-custom-4 text-body mt-2 mr-2">Valider</button>
                            <button type="button" class="btn btn-light btn-secondary btn-lg gradient-custom-4 text-body mt-2">Annuler</button>  
                        </div>
                     
                        <img src="<?php echo IMG_PATH;?>card-img-forn.png" alt="photo_ictorielle">
                    </form>
            </div>
      
      </div>
   </div>

   
    <?php
            require_once 'view/layout/error.php';
            //var_dump($data['notes']->getTitle());
        ?>
    </main>

<?php
            require_once 'view/layout/error.php';
            //var_dump($data['notes']->getTitle());
        ?>
    </main>
     <!-- --------Footer---------- -->
    <?php require_once 'view/layout/footer.php'; ?>
</body>
</html>
