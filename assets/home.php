<html>
<head>
	<style type="text/css">
	.content{
	padding:20px;
	}	
	
	.box,.small-box{
	width:1200px;
	height:260px;
	padding:20px 0px;
	margin-left:100px;
	}
	.small-box{
	border:2px solid black;
	display:inline;
	float:left;
	box-shadow:20px 20px 15px lightblue;
	}

	.facility{
	border:2px solid black;
	width:1200px;
	height:260px;
	display:block;
	box-shadow:20px 20px 15px lightblue;
	}

	.image-fade {
	animation: fadeInAnimation ease 3s;
	animation-iteration-count: 1;
	animation-fill-mode: forwards;
	}

	@keyframes fadeInAnimation {
				0% {opacity: 0;margin:20px -100px;}
				100% {opacity: 1;margin:20px 35px;}
				}

	h2{
	text-align:center;
	text-shadow:10px 10px 7px lightblue;
	}


	.facility-col-1-odd{
		width:100px;
		float:right;
	}
	.facility-col-2-odd{
		margin:15px;
		width:800px;
		padding:30px;
		background-color:papayawhip;
		border-right:10px solid lightblue;
	}
	.facility-col-1{
		width:100px;
		float:left;
	}
	.facility-col-2{
		float:right;
		margin:15px;
		width:800px;
		padding:35px;
		background-color:papayawhip;
		border-left:10px solid lightblue;
	}




	.facility p{
		font-family:'Lucida Fax','Arial';
		font-size:18px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<h2>School Overview</h2>
		<div class="box">
			<div class="facility">	
				<div class="facility-col-1-odd">
					<img src="image/logo.png" class="image-fade" width="200" height="200" align="right">
				</div>
				<div class="facility-col-2-odd" style="margin:10px 10px;">
				<p> Shantiniketan Vidhyalaya also known as SSET(Shree Shantiniketan Education Trust) also known as SSRV(Shree Shantiniketan Rotary Vidhyalaya).<br>Shantiniketan Vidhayalaya is a private school for class 1 to 10. You will find Gujarati Medium as well as English Medium too. <br>Our school provides a good,healthy and clean environment for students who are in. Schools have facilities for students who live at out of town.</p>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="facility">
				<div class="facility-col-1">
					<img src="image/school1.jpg" class="image-fade" width="200" height="200" align="left">
				</div>
				<div class="facility-col-2">
					<p>School has separate building for both Gujarati Medium and English Medium. <br>Faculties and Teachers are also get differ according medium change.<br>
						At each floor we provides toilets at corners of the floor. <br><br>School management,staff and peons make sure that school area must be kept clear all time.  </p>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="facility">
				<div class="facility-col-1-odd">
					<img src="image/schoolground.jpg" class="image-fade" width="200" height="200" align="right">
				</div>
				<div class="facility-col-2-odd">
					<p>School provides one common playground for kids and also provides another ground for students who studies in higher classes.<br><br>
					kids ground has slids and other toys for entertainment and for also provide sports equipments to students who are at higher studies.<br><br></p>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="facility">
				<div class="facility-col-1">
					<img src="image/canteen.jpg" class="image-fade" width="200" height="200" align="left">
				</div>
				<div class="facility-col-2">
					<p>School offers canteen also for students as well as for staff too, provides healthy meal. students must be pay for it extra from school fees.<br>Canteen Opens at all day at school time.<br><br>We also provide basic medicines to students who needs.</p>
				</div>
			</div>
		</div>
	<div class="content">
		<h2 style="margin:0px 400px;">School  Events</h2>
		<p style="margin-left:100px;font-family:'Lucida Fax','Arial';font-size:18px;">
		Every year, Our School is organising many events,functions,sports days,annul day,also school celebrates cultural events every year.
		</p>
		<div class="small-box" style="margin:0px 100px;">
				<img src="image/annual.jpg" class="image-fade" width="250" height="220">
				<img src="image/sports.jpg" class="image-fade" width="250" height="220">
				<img src="image/celebration.jpg" class="image-fade" width="250" height="220">
		</div>
	</div>
</div>
</body>
</html>