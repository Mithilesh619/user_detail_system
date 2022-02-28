<?php
date_default_timezone_set('Asia/Kolkata');
include 'database.php';
$obj=new query();
if($_POST['hidden']!='')
{
    $name=$_POST['name'];
    $id=$_POST['hidden'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $encrypt_password=sha1($password);
  
$sql="update user set name = '$name' , email =' $email' , password = '$encrypt_password'  where id = '$id' ";
$result = $obj->executeQuery($sql);
header('location:user_list.php'); 
}
else
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $encrypt_password=sha1($password);
    $insertArr = ['name' => $name ,'email' => $email , 'password' => $encrypt_password ,'created_time' => date('Y-m-d H:i:s') ];
    $sql=$obj->insertData('user',$insertArr);
    header('location:user_login.php');
    
}

?>