<?php 
    class user{
        private $dbm;

        function __construct($conn){
            $this->dbm = $conn;
        }

        public function insertUser($username, $password){

            try {
                //code...

                $result  = $this->getUserByUsername($username);
                if($result['num'] > 0){
                    return false;
                } else {

                    $new_password = md5($password.$username);
                    $sql = "INSERT INTO users(username,password) VALUES (:username, :password)";
                    $stmt = $this->dbm->prepare($sql);

                    $stmt->bindparam(':username',$username);
                    $stmt->bindparam(':password',$new_password);


                    $stmt->execute();
                    return true;
                }
             } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
             }
        }

        public function getUser($username, $password){
            try {
                $sql = "select * from users where username = :username and password = :password";
                $stmt = $this->dbm->prepare($sql);
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':password',$password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
            }
        }

        public function getUserByUsername($username){
            try {
                $sql = "select count(*) as num from users where username = :username";
                $stmt = $this->dbm->prepare($sql);
                $stmt->bindparam(':username',$username);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
            }
        }
    }
?>