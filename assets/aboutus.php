<html>
<head>
	<style type="text/css">
	.content,.profile{
	padding:20px 30px;
	}	
	
	.box{
	width:1300px;
	height:400px;
	padding:20px 20px;
	border:2px solid black;
	box-shadow:20px 20px 15px lightblue;	
	}

	.small-box{
	width:250px;
	height:270px;
	padding:20px 20px;
	margin:40px 20px;
	border:2px solid black;
	float:left;
	box-shadow:20px 20px 15px lightblue;
	}

	.image-fade ,.box{
	animation: fadeInAnimation ease 3s;
	animation-iteration-count: 1;
	animation-fill-mode: forwards;
	}

	@keyframes fadeInAnimation {
				0% {opacity:0;}
				100% {opacity: 1;}
				}

	a{
		display:block;
		text-decoration:none;
	}
	
	.box img{
		width:200px;
		height:200px;
		margin:80px;
	}
	table,tr,td{
		border:none;
	}
	.change{
		background-color:#FCFFD0;
	}
	td{
		padding:20px;
	}
	.td-label{
		width:150px;
	}
	.td-data{
		width:650px;
	}

	.profile img{
		margin:30px;
		padding:5px;
	}
	.profile p{
		font-family:'Arial';
		font-weight:bold;
		text-align:center;
		text-decoration:undeline;
		font-style:italics;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<div class="box">
			<img src="image/logo.png" align="right">
			<table border="1">
			<tr class="change">
				<td class="td-label">Location:</td>
				<td class="td-data">
					Moti Shamaldevi Road, Kalol-Godhra Highway,
					Kalol - 389330, Dist. Panchmahal, Gujarat
				</td>
			</tr>
			<tr>
				<td class="td-label">Mobile No.</td>
				<td class="td-data">
					+91 90990 87311 / 90990 87312
				</td>
			</tr>
			<tr class="change">
				<td class="td-label">Phone:</td>
				<td class="td-data">
					2676-235940, 235888, 236288, 235788
				</td>
			</tr>
			<tr>
				<td class="td-label">E-mail :</td>
				<td class="td-data">
					sset2012@yahoo.co.in
				</td>
			</tr>
			<tr class="change">
				<td class="td-label">Webiste</td>
				<td class="td-data">
					<a href="">www.sseteducation-ngo.org</a>
				</td>
			</tr>
			<tr>
				<td class="td-label">Facebook:</td>
				<td class="td-data">
					<a href="https://www.facebook.com/shantiniketan.kalol/about_details" target="_blank">
					Facebook: https://www.facebook.com/shantiniketan.kalol/about_details	
					</a>
				</td>
			</tr>
			</table>
		</div>
	</div>

	<div class="profile">
		<h2>Management</h2>
		<div class="small-box">
				<img src="image/login.jpg" class="image-fade" width="170" height="150">
				<p>Mr.Chaudhri</p>	
		</div>
		<div class="small-box">
				<img src="image/login.jpg" class="image-fade" width="170" height="150">
				<p>Mr.Patel</p>	
		</div>
		<div class="small-box">
				<img src="image/login.jpg" class="image-fade" width="170" height="150">
				<p>Mrs.Patel</p>	
		</div>
	</div>
<br clear="left">
	<div class="content">
		<h2>Campus</h2>
		<div class="small-box">
				<img src="image/classroom.jpg" class="image-fade" width="250" height="250">	
		</div>
		<div class="small-box">
				<img src="image/assembly.jpg" class="image-fade" width="250" height="250">
		</div>
		<div class="small-box">
				<img src="image/lobby.jpg" class="image-fade" width="250" height="250">
		</div>
		<div class="small-box">
				<img src="image/slides.jpeg" class="image-fade" width="250" height="250">
		</div>
	</div>

	<div class="content">
		<h2>Gallary</h2>
		<div class="small-box">	
		<a href="">
				<p>Functions</p>
				<img src="image/folder.png" class="image-fade" width="200" height="200">
		</a>
		</div>
		<div class="small-box">
		<a href="">
				<p>Annual Day</p>
				<img src="image/folder.png" class="image-fade" width="200" height="200">
		</a>
		</div>
		<div class="small-box">
		<a href="">
				<p>Celebrations</p>
				<img src="image/folder.png" class="image-fade" width="200" height="200">
		</a>
		</div>
	</div>
</div>
</body>
</html>