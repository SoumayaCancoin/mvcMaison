<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\NoteManager;
  

    class ListController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
     
        public function list(){
        
            $this->view('notes/list.php', [
              
              ]);
              
        }   
     
    }