<?php 
include 'database.php';
$obj = new query();
$username = $_POST['username'];
$password = $_POST['pass'];
$sql = " select * from admin where username = '$username' and password ='$password' ";
$admnData = $obj->selectData($sql);
if($admnData!=0){
    session_start();
    $_SESSION['role'] = 'admin';
    header('location:user_list.php');
} else {
    header('location:admin_login.php'); 
}

