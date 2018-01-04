<?php
session_start();
if(!$_SESSION['projet'])
{
	header('location:login.php');
}
?>
