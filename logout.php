<?php 
    include_once './includes/session.php';
?>

<?php 
    session_destroy();
    header('Location: index.php');
?>

<?php 
        require_once './includes/footer.php'; 
?>