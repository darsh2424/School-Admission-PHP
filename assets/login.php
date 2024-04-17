<?php
require 'session.php';
if(!empty($_SESSION['auth']))
{
	header("location:http://localhost/project/index.php");
}
	if(isset($_POST['login']))
	{
		$username_email=$_POST['username-email'];
		$password=$_POST['password'];
		
		$cn=mysqli_connect("localhost","root","","school_users");
		if($cn)
		{
			$check=mysqli_query($cn,"select * from tb_user where username='$username_email' or email='$username_email'");
			$check_row=mysqli_num_rows($check);
			$match=mysqli_fetch_assoc($check);
			if($check_row==0)
			{
				echo "<script>alert('username or email does not exist');</script>";
			}	
			else
			{
				if($password!=$match["password"])
				{
					echo "<script>alert('Wrong Password!!');</script>";
				}
				else
				{

					$_SESSION["login"]=true;
					$_SESSION["auth"]=$match["auth"];
					$_SESSION["name"]=$match["username"];
					header("location:http://localhost/project/index.php");
				}
			}
		}
		else
		{
			echo "<script>alert('Error in Connection to server!!');</script>";
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
		margin:200 550;	
		width:470px;
		background-color:white;
		border-spacing: 30px;
		border:3px solid black;
		border-radius:30px;
		}
		input[type="text"],input[type="password"],input[type="submit"]{
		border:1px solid black;
		border-radius:30px;
		padding:10px;
		}
		#login input[type="submit"]{
		margin-left:230px;
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
</head>
<body>
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
	<td><label>Username or Email</label> </td>
	<td> <input type="text" name="username-email"> </td>
</tr>


<tr>
	<td>	<label>Password</label> </td>
	<td> <input type="password"  name="password"> </td>
</tr>


<tr>
	<td colspan="2"  id="login">
 
		<input type="submit" name="login" value="LOGIN">
	</td>
</tr>
<tr>
	<td class="links"><a href="http://localhost/project/index.php">HOME PAGE</a></td>
	<td class="links"> <a href="register.php">REGISTRATION PAGE</a> </td>
</tr>
</form>
</table>

</body>
</html>
