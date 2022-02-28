<?php 
include 'database.php';
$obj=new query();
$id = $_POST['user_id'];
$sql="delete from user  where id = '$id' ";
$result = $obj->executeQuery($sql);
echo  $result;