<?php 
include_once './includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence - <?php echo $title ?></title>
</head>
<body>
    <div class = 'container'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">IT Conference</a>
            <button class="navbar-toggler" type="button" data-toggle = "collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="viewrecords.php">View Records</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <?PHP 
                        if(!isset($_SESSION['userid'])){

                    ?>
                    <a class="nav-item nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                    <?php }else{ ?>
                        <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a>
                        <a class="nav-item nav-link" href="logout.php">Log out<span class="sr-only">(current)</span></a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    <br>
