<?php
$db_host='localhost';
$db_name='cars';
$db_user='root';
$db_password='';

$connectAssert=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$connectAssert){
	die('check your connection '.mysqli_error($connectAssert));
}
?>