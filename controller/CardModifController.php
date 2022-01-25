<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\NoteManager;
  

    class CardModifController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
     
        public function modifcard(){
        
            $this->view('notes/cardModif.php', [
              
              ]);
              
        }   
     
    }