<?php

$host="localhost";
$user="root";
$password="";
$db="demo";
 
$a=mysqli_connect('localhost','root','','demo');
mysqli_select_db($a,$db);

if(isset($_POST['username'])){
    
$uname=$_POST['username'];
$password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    $result=mysqli_query($a, $sql);
    
    if(mysqli_num_rows($result)!==0){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form </title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:url("images.jpeg");
			background-position: center;
			font-family: sans-serif;
			background-size: cover;
		}
		.loginbox{
			width: 320px;
			height: 420px;
			background:#000;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		h1{
			margin: 0;
			padding: 0;
			text-align: center;
			font-size: 22px;

		}
		.loginbox p{
			margin: 0;
			padding: 0;
			font-weight: bold;

		}
		.loginbox input{
			width: 100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"], input[type="password"]{
			border:none;
			border-bottom: 1px solid #fff;
			background:transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border:none;
			outline: none;
			height: 40px;
			background:#fb2525;
			color: #fff;
			font-size: 18px;
			border-radius: 50px;
		}
		.loginbox input[type="submit"]:hover
		{
			cursor: pointer;
			background:#ffc107;
			color: #000;
		}
		.loginbox a{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		.loginbox a:hover
		{
			color: #ffc107;
		}

	</style>
</head>
<body>
<div class="loginbox">
	<img src="avatar.png" class="avatar">
	<h1>login here</h1>
	<form>
		<p>Username</p>
		<input type="text" name="Username" placeholder="Username">
		<p>Password</p>
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="" value="Login">
		<a href="#"> Forgot Password </a><br>
		<a href="#"> Don't have an account?</a>
	</form>
</div>
</body>
</html>