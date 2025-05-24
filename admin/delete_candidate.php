<?php
session_start();
include("../config.php");
if(!isset($_SESSION['role'])|| $_SESSION['role']!='admin'){
header('Location: ..login.php');
}
$id = $_GET['id'];
$query= "DELETE FROM candidate WHERE id='$id'";
$data = mysqli_query($conn,$query);
if($data){
    header("Location: dashboard.php");
    exit();
}
?>