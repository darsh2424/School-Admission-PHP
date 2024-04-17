<?php
	require ($_SERVER['DOCUMENT_ROOT']."/PROJECT/assets/session.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropdown{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn{
  background-color:#C7C7C7;
  display:block;
  color:black;
  text-align:center;
  padding:60px;	
  font-size:25px;  
  border: none;
  outline: none;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
	background-color:#A3A3A3;
}

.dropdown-content{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="overflow-x:hidden;">

	<div class="header" style="height:70px;">
		<table width="100%" >
		<tr>
		<td width="15%"><img src="assets/image/logo.png" height="50" width="50" align="left" style="margin:0px 20px;padding:5px 5px;"></td>
		<td align="center"><h1 style="margin:0px 100px;">SHANTINIKETAN VIDHYALAYA</h1></td>
		<td width="15%"><img src="assets/image/logo.png" height="50" width="50" align="right" style="margin:0px 20px;padding:5px 20px;"></td>
		</tr>
		</table>
	</div>
						<?php
						if(isset($_POST['user-card']))
						{
							echo "<table width='300px' style='margin:100px 1200px; border:5px solid black; position:fixed; z-index:2; background-color:white;'>";
							echo "<tr><td colspan='2' align='right' style='padding:5px;'>";
								echo "<form method='post'><input type='submit' name='btn_close' value='CLOSE' style='border:1px solid red;'></form>";
										if(isset($_POST['btn_close']))
										{
											unset($_GET['user-card']);
										}
							echo "</td></tr>";
							echo "<tr>";
							echo "<td width='100px'><img src='assets/image/login.jpg' height='80px' width='110px' align='left' style='float:left; padding:20px;'></td>";
							echo "<td style='padding:10px;'>";
								echo "Hello!! ".$_SESSION['name'];
								echo "<ul>";
								if($_SESSION['auth']=="admin")
								{
									echo "<li style='margin:0px -30px;'><a href='assets/admin.php' target='_blank'>Admin's Table</a></li>";
								}
								else
								{
									echo "<li style='margin:0px -30px;'><a href='assets/help.php'  target='content-display'>Need help!!</a></li>";
								}
								echo "</ul>";
								echo "</td>";
							echo "</tr>";	
							echo "<tr><td colspan='2' id='footer' style='background:lightgrey ; padding:5px;text-align:right;'>";
									echo "<a href='assets/logout.php'>LOG OUT</a>";
								echo "</td></tr>";
							echo "</table>";

						}
						?>
	   <div class="nav-bar">
		<ul>
			<li><a href="http://localhost/project/assets/home.php" target="content-display">Home</a></li>
			
			<li><a href="http://localhost/project/assets/aboutus.php" target="content-display">About us</a></li>
			
			<li>
				<!-- <a target="content-display"> -->
				<div class="dropdown">
					<button class="dropbtn">Admission
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="http://localhost/project/assets/inquiry.php" target="content-display" style="padding:10px;font-size:20px;">&nbsp;&nbsp;&nbsp;Admission Inquiry Form&nbsp;&nbsp;&nbsp;</a>
      					<a href="http://localhost/project/assets/admission.php" target="content-display" style="padding:10px;font-size:20px;">Admission Form</a>
    				</div>
  				</div> 
			</li>
			
			<!-- Admin's Table link only visible for user admin  -->
			<?php
			if(isset($_SESSION['auth']))
			{
				$user=$_SESSION['auth'];
				if($user=="admin")
				{
					echo "<li><a href='http://localhost/project/assets/admin.php' target='_blank'>Admin's Table</a></li>";
				}		
			}
			?>
			
			<li><a href="http://localhost/project/assets/faq.php" target="content-display">FAQ</a></li><!--FAQ CONTACT US --!>
		
			<?php
				if(isset($_SESSION['login']))
				{
					if($_SESSION['login']==true)
					{
						$name=$_SESSION['name'];
						echo "<li>    <form method='post'>
	    								<img src='assets/image/login.jpg' height='30' width='30' style='border:1px solid black; border-radius: 50%;background-color:#333;float:left;position:absolute;z-index:1;margin:60px 50px;'> 
									<input type='submit' name='user-card' value='$name' class='btn' style='margin-left:25px;'>
							     </form>
							</li>";
					}
				}
				else
				{
						echo "<li><a href='http://localhost/project/assets/login.php''><input type='button' value='LOGIN' style='border-radius:10px;background-color:green;color:white;font-weight:bold;font-size:18px;padding:5px;'></a></li>";
				}

			?>

		</ul>

	   </div>


	<div class="content" style="margin:5px 35px;">
		<iframe src="http://localhost/project/assets/home.php" name="content-display" height="2200" width="1450" style="border:none;">
		</iframe>
	</div>


	<div class="footer">
	</div>
</body>
</html>
