<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\NoteManager;
  

    class ProjectModifController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
     
        public function modif(){
        
            $this->view('notes/projectModif.php', [
              
              ]);
              
        }   
     
    }