<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\NoteManager;
  

    class NoteController extends Router {


        /**
         * Afficher toutes les notes d'une personne (via une valeur get dans l'url)
         */
        public function allNotesFromUser(){
            $idTest = [$_GET["id"]]; // ?id=X
            $manTopic = new NoteManager();
            $notes = $manTopic->findOneById($idTest[0]);
            $this->view('notes/noteUser.php', [
                'notes' => $notes,
              ]);
        } 
        public function index(){
        
            $this->view('notes/index.php', [
              
              ]);
              
        }   
        public function connexion(){
        
            $this->view('notes/connexionPage.php', [
              
              ]);  
            }    
    }