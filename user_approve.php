<?php 
include 'database.php';
$obj=new query();
$id = $_POST['user_id'];
$sql="update user set status = 1  where id = '$id' ";
$result = $obj->executeQuery($sql);
echo  $result;