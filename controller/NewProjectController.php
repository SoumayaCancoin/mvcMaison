<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\NoteManager;
  

    class NewProjectController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
     
        public function newProject(){
        
            $this->view('notes/newProject.php', [
              
              ]);
              
        }   
     
    }