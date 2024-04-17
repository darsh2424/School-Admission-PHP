<?php
	require 'session.php';
	if(!empty($_SESSION['auth']))
	{
		header("location:http://localhost/project/index.php");
	}
	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirmpsw=$_POST['confirmpassword'];
		
		$cn=mysqli_connect("localhost","root","","school_users");
		$check_exist="select * from tb_user where email='$email' or username='$username'";
		if(mysqli_num_rows(mysqli_query($cn,$check_exist))>0)
		{
			echo "<script>alert('username or email already exist');</script>";

		}
		else
		{
			if($password==$confirmpsw)
			{
				$insert="insert into tb_user values('$username','$email','$password','user')";
				mysqli_query($cn,$insert);
				echo "<script>alert('Registration Successfull!! Click on LOGIN PAGE');</script>";

				$check=mysqli_query($cn,"select * from tb_user where username='$username' and email='$email' and password='$password'");
				if(mysqli_num_rows($check)>0)	
				{
					header('location:login.php');
				}
			}
			else
			{
				echo "<script>alert('Password does not match');</script>";

			}
		}

	}
?>
<html>
<head>
	<style type="text/css">
		body{
		background-color:#FFE2F8;
		}
		table{
		margin:100 500;	
		width:470px;
		background-color:white;
		border-spacing: 30px;
		border:3px solid black;
		border-radius:30px;
		}
		input[type="text"],input[type="password"], input[type="button"],input[type="submit"]{
		border:1px solid black;
		border-radius:30px;
		padding:10px;
		}
		#register{
		padding:10px;
		}
		#register input[type="submit"],#register input[type="button"]{
		width:130px;
		}
		.links a{
		border:1px solid black;
		border-radius:30px;
		text-decoration:none;	
		color:black;
		padding:10px;
		background-color:#FCFFD0;
		}

	</style>
<script language="javascript" type="text/javascript" src="js/register.js">

</script>
</head>
<body onload="submitbtn();">

<table id="main_table">
<form name="frm" action="" method="POST">
<tr>
	<td colspan="2" align="right"> 
	<a href="http://localhost/project/index.php">
		<img src="image/closebtn.png" width="25" height="25">
	</a>
 </td>
</tr>

<tr>
	<td><label>Username</label> </td>
	<td> <input type="text" name="username"> </td>
</tr>

<tr>
	<td>	<label>Email</label> </td>
	<td> <input type="text" name="email"> </td>
</tr>

<tr>
	<td>	<label>Password</label> </td>
	<td> <input type="password"  name="password"> </td>
</tr>

<tr>
	<td>	<label>Confrim Password</label> </td>
	<td> <input type="password"  name="confirmpassword"> </td>
</tr>

<tr>
	<td colspan="2" align="right" id="register">
 
		 <input type="button" name="check" value="CHECK VALUES"  onclick="validate();">
		<input type="submit" name="submit" value="REGISTER">
	</td>
</tr>

<tr align="center">
	<td class="links"><a href="http://localhost/project/index.php">HOME PAGE</a></td>
	<td class="links"> <a href="login.php">LOGIN PAGE</a> </td>
</tr>
</form>
</table>

</body>
</html>
