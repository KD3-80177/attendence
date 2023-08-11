<?php 
    require_once "./includes/authcheck.php";
    require_once "./db/conn.php";

    if (!$_GET['ids']){
        include './includes/error.php';
        header('Location: viewrecords.php');
    }else{
        $ids = $_GET['ids'];
        $result = $Crud->delete($ids);

        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include './includes/error.php';
        }
    }
?>