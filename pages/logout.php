<?php   
include "../admin/universals/sessions.php";
include "../admin/universals/class.php";

session_start(); $id=session_id();
session_destroy();

	setcookie('log_cookie','logged',time()-(86400*30),'/');
	setcookie('log_name',$row['Name'],time()-(86400*30),'/');
				setcookie('log_id',$row['ID'],time()-(86400*30),'/');
    
	
	$del="delete from cart where Ses_id='$id' "; $db->delete($del);
	 
	session_start();
	$_SESSION['logout']="logged out!";
    header('location:../index.php');



?>