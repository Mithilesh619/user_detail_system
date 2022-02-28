<?php
include 'database.php';
$obj=new query();
$email = $_POST['duplicate_email'];
$sql="select email from user  where email = $email ";
$result = $obj->executeQuery($sql);
if(!empty($result))
{
	$result=1;
}
else
{
	$result=0;
}
echo $result;
?>