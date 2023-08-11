<?php 
    $title = 'Login-Page';
    require_once './includes/header.php';
    require_once '../attendence/db/conn.php'; 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];

        $new_password = md5($password.$username);
        $result = $user ->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">username or password is incorrect! please try again</div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }
    }
?>

<h1 class="text-center"><?php echo $title ?></h1>
<br>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
    <table class = "table table-sm">
        <tr>
            <td><label for="username">username: </label></td>
            <td><input type="text" name="username" class="from-control" id = "username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
            <!-- <?php if (empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>"; ?> -->
            </td>
        </tr>
        <tr>
            <td><label for="password">Password: </label></td>
            <td><input type="password" name="password" class="form-control" id="password">
            <!-- <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'> $password_error<?p>"; ?> -->
        </td>
        </tr>
    </table><br><br>
    <input type="submit" value="Login" class="btn btn-primary btn-block"><br><br>
    <a href="#">Forget Password</a>
</form><br><br>

<?php 
        require_once './includes/footer.php'; 
    ?>