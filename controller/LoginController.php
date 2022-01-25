<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use helpers\Redirect;
    use Model\Manager\UserManager;
  

    class LoginController extends Router {
        public function login() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // if form submitted with post method -validate request,manage post request differently, 
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                //Gets external variables and  filters them
                $data = [
                    
                    'email'=>trim( $_POST['email']),
                    'password' => trim($_POST['password']),
                  
                ];
           
           
                // verification email input 
                if(empty($data['name/email']) || empty($data['usersPwd'])){
                    session::addMessage("error", "veuillez remplir les champs");
                    redirect("notes/login.php");
                    exit();
                }
               $userManager = new UserManager;
                //Check for user/email
                if($userManager->userExist($data['email'],$data['password'])){
                   redirect('notes/userPage.php');
                   session::getUser();
            }else{
                //user register faild
              if($userManager->mailExist($data['email'])){
                session::addMessage("error", "votre mot de passe est incorrect");
                $this->view("notes/login.php", $data);
       
        }else{
            session::addMessage("error", "votre mot de passe et votre mail n'existe pas");
            redirect('notes/login.php');
        }
    }
}
        }
    }
    
        