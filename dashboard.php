<?php
	session_start();
	if($_SESSION['uid']=="")
	{
		header("Location:login.php");
	}
	else
	{
		echo "Welcome ".$_SESSION['uid'];
		echo "<br><a href='logout.php'>Logout</a>";
	}

?>