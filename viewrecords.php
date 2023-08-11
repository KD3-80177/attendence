<?php
    $title = 'View Records';
    require_once "./includes/header.php";
    require_once "./includes/authcheck.php";
    require_once "./db/conn.php";
    $result =$Crud -> getattendees();
?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <!-- <th>Date Of Birth</th>
            <th>Email Address</th>
            <th>Contact Number</th> -->
            <th>Speciality</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $result -> fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td> <?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <!-- <td><?php echo $r['dateofbirth'] ?></td>
                <td><?php echo $r['emailaddress'] ?></td>
                <td><?php echo $r['contactnumber'] ?></td> -->
                <td><?php echo $r['name'] ?></td>
                <td>
                    <a href="view.php?ids=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?ids=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure You want to delete the record');" href="delete.php?ids=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>

<br>
<br>
<br>

<?php 
    require_once "./includes/footer.php";
?>