<?php
include 'database.php';
$obj=new query();
$email=$_POST['email'];
$password=$_POST['password'];
$encrypt_password=sha1($password);
$sql="select * from user where email='$email' and password='$encrypt_password' ";
//echo $sql;die();
$userData=$obj->selectData($sql);
//print_r($userData);die();
if($userData!=0)
{
    // echo "if";
    // if($userData[0]['status']==0){
    //     echo "Your Account is not approved by admin";
    //     sleep(3);
    //     header('location:user_login.php');  
    // } 
    session_start();
    $_SESSION['role']= 'user';
    header('location:user_list.php');
}
else
{
    header('location:user_login.php');  
}

?>