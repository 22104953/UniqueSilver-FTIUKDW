<?php
include ("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$query_string = "SELECT * from user where username = '" . $username . "' AND password = '" . $password . "'";
//$query = "SELECT * from users where username = '".$username."' AND password = '".$pass."'";
$hasilquery = mysql_query($query_string);
$ketemu = mysql_num_rows($hasilquery);
if ($ketemu > 0)
{
	session_start();
	$_SESSION['user'] = $username;
	header('location:index.php');
}
else
{
	
	echo "Username atau Password Salah";
}
?>