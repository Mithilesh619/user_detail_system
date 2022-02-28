<?php 
if(!isset($_SESSION['role']) ||   $_SESSION['role'] ==''){
    header('location:user_login.php');
}