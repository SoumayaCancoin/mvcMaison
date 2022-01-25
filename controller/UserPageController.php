<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\SecurityManager;
  

    class UserPageController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
         
        public function userPage(){
        
            $this->view('notes/userPage.php', [
              
              ]);  
            }    
    }