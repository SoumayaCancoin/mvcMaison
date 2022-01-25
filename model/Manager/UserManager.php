<?php
    namespace Model\Manager;
    
    use App\AbstractManager;
    use App\Session;
    
    // mettre tous les messages d'erreur dans Session


    class UserManager extends AbstractManager
    {
        private static $classname = "Model\Entity\User";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT * FROM users";

            return self::getResults(
                self::select($sql,
                    null, 
                    true
                ), 
                self::$classname
            );
            die ($sql);
        }
        

        public function findOneById($id){
            $sql = "SELECT *          
                    FROM users 
                    WHERE id = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }
        public function mailExist($email){
            
            $sql = "SELECT *          
                    FROM users 
                    WHERE email = :email";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["email" => $email], 
                    false
                ), 
                self::$classname
            );
            // Session::addMessage()
      
        }
        public function userExist($email,$password){
            
            $sql = "SELECT *          
                    FROM users 
                    WHERE email = :email AND password = :password";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["email" => $email ,"password" => $password], 
                    false
                ), 
                self::$classname
            );
           
        }
        public function createUser($params){
            $sql =" INSERT INTO users (name , mail, password) VALUES (:name, :email, :password)";
            return self::getOneOrNullResult(
                self::create($sql,
                [":name"=> $name,
                ":email"=> $email,
                ":password"=> $password]),
                self::$classname
            );
        }
      
    }