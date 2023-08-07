<?php 
    $title = "View Individual Record";

    require_once '../attendence/includes/header.php';
    require_once '../attendence/db/conn.php';

    if(
        isset($_GET['ids'])){
        $ids = $_GET['ids'];
        $result = $Crud->getattendeedetails($ids);
    }else{
        include './includes/error.php';
    }


?>
<div class="card" style = "width: 18rem;">
    <div class="card-body">
        <h5 class= "card-title">
            <!-- <?php echo $result['firstname'].' '.$result['lastname']; ?> -->
            <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
        </h5>
        <p class= "card-text">
            <!-- <?php echo $result['speciality']; ?> -->
            Speciality: <?php echo $result['speciality_id']; ?>
        </p>
        <p class="card-text">
            Date Of Birth: <?php echo $result['dateofbirth']; ?>
            <!-- <?php echo $result['dob']; ?> -->
        </p>
        <p class="card-text">
            Email Address: <?php echo $result['emailaddress']; ?>
            <!-- <?php echo $result['email']; ?> -->
        </p>
        <p class="card-text">
            Contact Number: <?php echo $result['contactnumber']; ?>
            <!-- <?php echo $result['phone']; ?> -->
        </p>

    </div>
</div>
<br>


        <a href="viewrecords.php" class="btn btn-info">Back To List</a>
        <a href="edit.php?ids=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure You want to delete the record');" href="delete.php?ids=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
<br>
<br>
<br>    
<br>
<?php require_once '../attendence/includes/footer.php'; ?>