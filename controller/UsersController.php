<?php
    namespace Controller;  
    use App\Session;
    use App\Router;
    use Model\Manager\UserManager;
    use helpers\Redirect;
  

    class UsersController extends Router {

        public function index() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // if form submitted with post method -validate request,manage post request differently, 
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                //Gets external variables and  filters them
                $data = [
                    'name' => $_POST['name'],
                    'email'=> $_POST['email'],
                    'password' => $_POST['password'],
                    'confirmPassword'=> $_POST['confirmPassword']
                ];
               
                $msg = [];
               // verification name and first name input
                if (empty($data['name'])){ 
                    $msg = "veuillez renseigner votre nom" ;
                }
               
                // verification name carracter
                $regex = preg_match('/^[A-Z]{1}[a-z0-9_-]{0,}[a-z0-9]$/',$data['name']);
                if($regex !== 1){
                    $msg = "veuillez utiliser un nom valide"  ;
                }
             
                // verification email input 
                if (empty($data['email'])) {
                    $msg = "veuillez renseigner votre mail";
                }
                //verification correct mail
                if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)== false) {
                    $msg = "veuillez utiliser un mail valide";
                }
                if (empty($data['password'])){
                    $msg = "veuillez renseigner votre mot de passe ";
                }
                //verification password length
                if (strlen($data['password']) < 6) {
                    $msg = "Un mot de passe doit contenir au minimum 6 caractères";
                }
                if (empty($data['confirmPassword'])) {
                    $msg = "veuillez renseigner votre confirmation mot de passe";
                }
                // verification cofirmed password
                if($data['password'] !== $data['confirmPassword'] ) {
                    $msg = "le mot de passe et la confirmation mot de passe doit être identique ";
                }
                if (empty($data['confirmPassword'])) {
                    $msg = "Please fill your confirm password";}
                // check if email exist
                $users = new userManager();
                $exist = $users->mailExist($data['email']);
                if($exist){
                    $msg = "Ce mail est déja utilisé";
                }
                
                if(!empty ($msg)){
                    redirect('notes/index.php');
                    session::addMessage('error',$msg);
                   
                }else{
                // password hach 
                $data['password'] = password_hash($data['password'], PASSWORD_ARGON2ID);
                 // user register succed

                 
                 $user = $users->createUser($data['name'], $data['email'], $data['password']);
               if($result){
                   //used added successfully
                   redirect('notes/login.php');
                   Session::addUser($user);
               }else {
                echo "essayé de renseginer encore fois votres informations";
              
                
            }
        }

            }else {
                $data = [
                    'name' =>'',
                    'email'=>'',
                    'password' =>'',
                    'confirm-password'=>'',

                ];
                // load the register 
                $this->view('notes/index.php', $data);
            }


        }


    }
