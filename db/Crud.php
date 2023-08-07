<?php
    class Crud{
        private $dbm;

        function __construct($conn){
            $this->dbm = $conn;
        }
        public function insertattendees($fname,$lname, $dob, $email,$contact, $speciality){
             try {
                //code...
                $sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, emailaddress, contactnumber, speciality_id) VALUES (:fname, :lname, :dob, :email, :contact, :speciality)";
                $stmt = $this->dbm->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':speciality',$speciality);

                $stmt->execute();
                return true;
             } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
             }
        }

        public function getattendees(){
            try {
                $sql = "SELECT * FROM attendee a inner join specialities s on a.speciality_id = s.speciality_id";
                $result = $this->dbm->query($sql);
                return $result;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
            }
        }

        public function getattendeedetails($ids){
            try {
                $sql = "select * from attendee where attendee_id = :ids";
                $stmt = $this->dbm->prepare($sql);
                $stmt->bindparam(':ids',$ids);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage(); 
                return false;
            }
        }

        public function editattendee($ids, $fname,$lname, $dob, $email,$contact, $speciality){

            try {
                //code...
            $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`speciality_id`=:speciality WHERE attendee_id = :ids";
            $stmt = $this->dbm->prepare($sql);
            $stmt->bindparam(':ids',$ids);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':speciality',$speciality);

            $stmt->execute();
            return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;          
            }
        }

        public function delete($ids){
            try {
                $sql = "delete from attendee where attendee_id = :ids";
                $stmt = $this->dbm->prepare($sql);
                $stmt->bindparam(':ids',$ids);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }

        public function getspeciality(){
            try {
                $sql = "SELECT * FROM specialities";
                $result = $this->dbm->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }

        
    }
?>