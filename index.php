<?php
if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$user_name='root';
	$password="";
	$host_name="localhost";
	$database_name="mft_paiez2";
	$link=mysqli_connect($host_name,$user_name,$password,$database_name);
	$query="select * from user2 where user='$user' and pass='$pass' ";
	
	$result=mysqli_query($link,$query);
	if(mysqli_num_rows($result)==1){
		echo "yes";
	}
	else{
		echo "no";
	}
}
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>login</title>
	<meta name="author" content="1Li" />
	<!-- Date: 2021-01-03 -->
	<link type="text/css" rel="stylesheet" href="assets/css/1.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/fonts.css" />
</head>
<body>
	<form action="#" method="post">
		username: <input type="text" name="user" /><br/>
		password: <input type="password" name="pass" /><br/>
		<input type="submit" name="submit" />
	</form>
	
</body>
</html>

