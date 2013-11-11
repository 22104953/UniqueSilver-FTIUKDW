<?php
	session_start();
	include("db.php");
	$id_pesan = $_GET['id_user'];
	
		$query = "DELETE from user where id_user='$id_pesan'";
		if(mysql_query($query))
		header("location:member_admin.php");
	
?>