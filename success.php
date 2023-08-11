<?php 
        $title = 'Success';
        require_once './includes/header.php'; 
        require_once '../attendence/db/conn.php';

        if(isset($_POST['submit'])){
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['date'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $speciality = $_POST['speciality'];

            // $orig_file = $_FILES["avatar"]["tmp_name"];
            // $target_dir = 'uploads/';
            // $destination = $target_dir.basename($_FILES["avatar"]["name"]);
            // move_uploaded_file($orig_file,$destination);

            exit();

            $issuccess = $Crud->insertattendees($fname, $lname, $dob, $email,$contact, $speciality);
            //$specialityName = $Crud->getSpecialityById($speciality);

            if($issuccess){
                // echo '<h1 class="text-center text-success">You have been successfully registered.</h1>';
                include './includes/message.php';
            }else{
                // echo '<h1 class = "text-center text-danger">There was an error processing</h1>';
                include './includes/error.php';
            }
        }
    ?>
    <!-- <?php 
        echo "First Name: ".$_GET['firstname'].'</br>';
        echo "Last Name: ".$_GET['lastname'].'</br>';
        echo "DOB: ".$_GET['date'].'</br>';
        echo "Area Of interest: ".$_GET['speciality'].'</br>';
        echo "Mail Address: ".$_GET['email'].'</br>';
        echo "Contact Number: ".$_GET['contact'].'</br>';
    ?> -->
    <?php 
        echo "First Name: ".$_POST['firstname'].'</br>';
        echo "Last Name: ".$_POST['lastname'].'</br>';
        echo "DOB: ".$_POST['date'].'</br>';
        echo "Area Of interest: ".$_POST['speciality'].'</br>';
        echo "Mail Address: ".$_POST['email'].'</br>';
        echo "Contact Number: ".$_POST['contact'].'</br>';
    ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h6 class="text-center">
    <?php 
    
    require_once './includes/footer.php' ?>
    
</h6>
