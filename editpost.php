<?php 

    require_once '../attendence/db/conn.php'; 
    if(isset($_POST['submit'])){

        $ids = $_POST['ids'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $speciality = $_POST['speciality'];

        $result = $Crud->editattendee($ids, $fname,$lname, $dob, $email,$contact, $speciality);

        if($result){
            header("Location: index.php");
        }
        else{
            include './includes/error.php';
        }
    }
    else{
        include './includes/error.php';
    }
?>