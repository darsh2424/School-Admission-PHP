<html>
<head>
	
	<style>
		body{
			overflow-y:none;
		}
		.button:hover{
			opacity:60%;
		}
		table{
		border-spacing: 15px;
		}

		.previous-data{
		border-spacing: 25px;
		}

		.form-content{
		text-align:right;
		padding:20px;
		border-right:5px solid lightblue;
		}

		input[type="text"]{
		border-radius:6px;
		height:30px;
		}
		
		.student-detail,.parents-detail{
		border:1px solid black;
		margin:auto auto;
		width:1100px;
		padding:40px;
		box-shadow:20px 20px 15px lightblue;
		}
		.parents-detail{
		margin:100px 130px;		
		}
		.alert{
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 1;
        margin-bottom: 15px;
        z-index:2;
        margin:0px 0px;
        width:1400px;
		transition: opacity 0.6s;
        }
        
        .alert.success {background-color: #04AA6D;}


        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover{
        color: black;
        }


	</style>
	    <script src="js/admit.js" type="text/javascript">  </script>	
		<script>
			function test()
			{
				document.getElementsByClassName("submit_tb")[0].style="z-index:2;position:absolute;background-color:white;margin-left:1005%;margin-top:5%;"; 

			}
		</script>
</head>
<body>
<div class="alert" style="visibility:hidden;">
  <span class="closebtn">&times;</span>  
  <strong>Alert!</strong> <span id="msg">Error Message</span>
</div>
<div class="alert success" style="visibility:hidden;background-color:green;">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> <span id="msg">Admission Form Successfully Submitted!! </span>
</div>

<br><br>
<form name="admit" method="post">
<div class="submit_tb" style="z-index:2;position:absolute;background-color:white;margin-left:1005%;margin-top:10%;">
	<div style="padding:20px;">
	<div style="margin-left:90%"><img src="image/closebtn.png" width="30" height="30" style="cursor:pointer" onclick="test();"></div>
				<span style="color:red;font-weight:bold;font-size:20px;">
				Before Submitting Data Please Check!! <br>
				<span style="color:black;font-size:15px;">(After Submitting Data, Procedure For Updating Your Data Can Be Take More Time...)</span></span>
		 		<div class="button" style="padding:10px;width:50px;margin-left:70%;">
						<input type="SUBMIT" value="SUBMIT" name="admit_sub" style="border-radius:10px;background-color:green;color:white;font-weight:bold;font-size:20px;padding:10px;">
		 		</div>
	</div>
</div>
<div class="student-detail">
<table width='85%' style="margin-left:130px;">
	<tr>
		<td align="right" style="padding:15px;">
		 <div class="button" style="padding:10px;float:left;margin-left:55%;width:100px;">
			<input type="button" value="CHECK DETAILS" name="check_dtl" onclick="check();" style="border-radius:10px;background-color:green;color:white;font-weight:bold;font-size:25px;padding:10px;">
		 </div>
		 <div class="button" style="padding:10px;width:100px;">
		 	<input type="reset" value="RESET" style="border-radius:10px;background-color:red;color:white;font-weight:bold;font-size:25px;padding:10px;">
		 </div>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td colspan="4"><h2>Student Details</h2></td>
	</tr>

	<tr>
		<td class="form-content">Student Full Name:</td>
		<td colspan="3">  <input type="text" name="stud_fname" class="form-data" placeholder="Enter First Name">
			   <input type="text" name="stud_mname" class="form-data" placeholder="Enter Middle Name">
			  <input type="text" name="stud_lname" class="form-data" placeholder="Enter Last Name"></td>
	</tr>
	<tr>
		<td class="form-content">Student Gender:</td>
		<td>
			<input type="radio" name="stud_gender" value="M"> Male
			 <input type="radio" name="stud_gender" value="F"> Female
		</td>
		<td class="form-content">Parent's Contact No:</td>
		<td>
			 <input type="text" name="parent_contact" class="form-data form-num" placeholder="Enter Contact Number">
		</td>

	</tr>

	<tr>
		<td class="form-content">Class: <br>(In Which You Want Admission)</td>
		<td>
			<select name="class">
				<option selected disabled>--Select Class--- </option>
				<option value="1">Class 1</option>
				<option value="2">Class 2</option>
				<option value="3">Class 3</option>
				<option value="4">Class 4</option>
				<option value="5">Class 5</option>
				<option value="6">Class 6</option>
				<option value="7">Class 7</option>
				<option value="8">Class 8</option>
				<option value="9">Class 9</option>
				<option value="10">Class 10</option>
				<option value="11">Class 11</option>
				<option value="12">Class 12</option>
			</select>
		</td>
		<td class="form-content">Academic Year:</td>
		<td>
			<select name="academic_year">
				<?php
					$curr_year=date('Y');
					echo "<option selected disabled>--Select Year--- </option>";
					for($i=$curr_year;$i<$curr_year+5;$i++)
					{
						$year=$i+1;
						$year=$i.'-'.$year;
						echo "<option>$year</option>";
					}
				?>
			</select>
		</td>
	</tr>

	<tr>
		<td class="form-content">Date Of Birth:</td>
		<td>
			<input type="date" name="bdate">
		</td> 
		<td class="form-content">Aadhaar No:</td>
		<td>
			 <input type="text" name="stud_aadhaar" class="form-data form-num" placeholder="Enter Aadhaar Number">
		</td>
	</tr>

	<tr>
		<td class="form-content">Student Address:</td>
		<td colspan="3">
			<textarea name="address" rows="4" cols="37" placeholder="Block\flat no\house no       			Society Name \ Apartment Name       			Landmark"></textarea>
		</td>
	</tr>

	<tr>
		<td class="form-content">City:</td>
		<td>
			 <input type="text" name="city" class="form-data" placeholder="Enter City">
		</td>
		<td class="form-content">State:</td>
		<td>
			 <input type="text" name="state" class="form-data" placeholder="Enter State">
		</td>
	</tr>
	<tr>
		<td class="form-content">Nationality:</td>
		<td>
			 <input type="text" name="nation" class="form-data" placeholder="Enter Nationality">
		</td>
		<td class="form-content">PINCODE:</td>
		<td>
			 <input type="text" class="form-data pincode" name="pin1" size="1" maxlength="1">
			 <input type="text" class="form-data pincode" name="pin2" size="1" maxlength="1">
			 <input type="text" class="form-data pincode" name="pin3" size="1" maxlength="1">
			 <input type="text" class="form-data pincode" name="pin4" size="1" maxlength="1"> 
			 <input type="text" class="form-data pincode" name="pin5" size="1" maxlength="1">	
			 <input type="text" class="form-data pincode" name="pin6" size="1" maxlength="1">
		</td>
	</tr>
	<tr>
		<td class="form-content">Mother Tongue:</td>
		<td>
			 <input type="text" name="mothertongue" class="form-data" placeholder="Enter Mother Tongue">
		</td>
		<td class="form-content">Parent's Email:</td>
		<td>
			<input type="text" name="email" class="form-data" placeholder="e.g. abc@gmail.com">
		</td> 
	</tr>
</table>
<table class="previous-data">
	<tr>
		<td colspan="4"><h2>Previous Academic Record:</h2></td>
	</tr>

	<tr>
		<td width="40%">Name And Location Of Previous School:</td>
		<td>Class:</td>
		<td>Year Of Study:</td>
		<td>Percentage:</td>
	</tr>
	<tr>
		<td> <input type="text" class="form-data" name="previous_school_name" size="50" placeholder="e.g. V & C Patel English Medium School"></td>
		<td>
			<select name="previous_class">
				<option selected disabled>--Select Class--- </option>
				<option value="1">Class 1</option>
				<option value="2">Class 2</option>
				<option value="3">Class 3</option>
				<option value="4">Class 4</option>
				<option value="5">Class 5</option>
				<option value="6">Class 6</option>
				<option value="7">Class 7</option>
				<option value="8">Class 8</option>
				<option value="9">Class 9</option>
				<option value="10">Class 10</option>
				<option value="11">Class 11</option>
			</select>
		</td>
		<td>
			<select name="previous_class_year">
				<?php
					$curr_year=date('Y');
					echo "<option selected disabled>--Select Year--- </option>";
					for($i=$curr_year;$i>$curr_year-5;$i--)
					{
						$year=$i-1;
						$year=$year.'-'.$i;
						echo "<option>$year</option>";
					}
				?>
			</select>
		</td>
		<td> <input type="text" class="form-data form-num" name="previous_class_perc" placeholder="e.g. 85"> %</td>
	</tr>

</table>
</div>
<div class="parents-detail">
<table>
	<tr>
		<td colspan="4"><h2>Parents Details</h2></td>
	</tr>

	<tr>
		<td class="form-content">Father's Full Name:</td>
		<td colspan="3"> <input type="text" class="form-data" name="stud_father_fname" placeholder="Enter First Name">
			  <input type="text" class="form-data" name="stud_father_mname" placeholder="Enter Middle Name">
			 <input type="text" class="form-data" name="stud_father_lname" placeholder="Enter Last Name"></td>
	</tr>
	<tr>
		<td class="form-content">Father's Aadhaar Number:</td>
		<td> <input type="text" class="form-data form-num" name="stud_father_aadhaar" placeholder="Enter Aadhaar Number">
		<td class="form-content">Father's Contact Number:</td>
		<td> <input type="text" class="form-data form-num" name="stud_father_contact" placeholder="Enter Contact Number">
	</tr>
	<tr>
		<td class="form-content">Father's Occupation:</td>
		<td> <input type="text" class="form-data" name="stud_father_occupation" placeholder="e.g. Job / Business">
		<td class="form-content">Father's Income:</td>
		<td> <input type="text" class="form-data form-num" name="stud_father_income" placeholder="e.g. 150000">
	</tr>
	<tr>
		<td class="form-content">Mother's Full Name:</td>
		<td colspan="3"> <input type="text" class="form-data" name="stud_mother_fname" placeholder="Enter First Name">
			  <input type="text" class="form-data" name="stud_mother_mname" placeholder="Enter Middle Name">
			 <input type="text" class="form-data" name="stud_mother_lname" placeholder="Enter Last Name"></td>
	</tr>
	<tr>
			<td class="form-content">Mother's Aadhaar Number:</td>
			<td> <input type="text" class="form-data form-num" name="stud_mother_aadhaar" placeholder="Enter Aadhaar Number">
			<td class="form-content">Mother's Contact Number:</td>
			<td> <input type="text" class="form-data form-num" name="stud_mother_contact" placeholder="Enter Contact Number">
	</tr>
	<tr>
		<td class="form-content">Mother's Occupation:</td>
		<td> <input type="text" class="form-data" name="stud_mother_occupation" placeholder="e.g. Job / Business">
		<td class="form-content">Mother's Income:</td>
		<td> <input type="text" class="form-data" name="stud_mother_income" placeholder="e.g. 150000">
	</tr>
</table>
</div>

</form>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

<?php
if(isset($_POST['admit_sub']))
{
	$curr_date=date('Y-m-d');
	$stud_name=$_POST['stud_fname'].' '.$_POST['stud_mname'].' '.$_POST['stud_lname'];
	$stud_gender=$_POST['stud_gender'];
	$stud_parent_phone=$_POST['parent_contact'];
	$stud_class=$_POST['class'];
	$stud_academic_year=$_POST['academic_year'];
	$stud_bdate=$_POST['bdate'];
	$stud_aadhaar=$_POST['stud_aadhaar'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$nation=$_POST['nation'];
	$pincode=$_POST['pin1'].$_POST['pin2'].$_POST['pin3'].$_POST['pin4'].$_POST['pin5'].$_POST['pin6'];
	$mothertongue=$_POST['mothertongue'];
	$email=$_POST['email'];
	$prev_school=$_POST['previous_school_name'];
	$prev_class=$_POST['previous_class'];
	$prev_year=$_POST['previous_class_year'];
	$prev_class_perc=$_POST['previous_class_perc'];
	$father_name=$_POST['stud_father_fname'].' '.$_POST['stud_father_mname'].' '.$_POST['stud_father_lname'];
	$father_aadhaar=$_POST['stud_father_aadhaar'];
	$father_contact=$_POST['stud_father_contact'];
	$father_occupation=$_POST['stud_father_occupation'];
	$father_income=$_POST['stud_father_income'];
	$mother_name=$_POST['stud_mother_fname'].' '.$_POST['stud_mother_mname'].' '.$_POST['stud_mother_lname'];
	$mother_aadhaar=$_POST['stud_mother_aadhaar'];
	$mother_contact=$_POST['stud_mother_contact'];
	$mother_occupation=$_POST['stud_mother_occupation'];
	$mother_income=$_POST['stud_mother_income'];

	$cn=mysqli_connect("localhost","root","","school_users");
	if($cn)
	{
		$insert=mysqli_query($cn,"INSERT INTO admission_tb(admit_date, stud_name, stud_gender, parent_phone, admission_class, admission_year, stud_bdate, stud_aadhaar, address, city, state, nation, pincode, mother_tongue, parent_email, prev_school, prev_class, prev_study_year, prev_class_perc, father_name, father_aadhaar, father_contact, father_occupation, father_income, mother_name, mother_aadhaar, mother_contact, mother_occupation, mother_income) VALUES('$curr_date','$stud_name','$stud_gender','$stud_parent_phone','$stud_class','$stud_academic_year','$stud_bdate','$stud_aadhaar','$address','$city','$state','$nation','$pincode','$mothertongue','$email','$prev_school','$prev_class','$prev_year','$prev_class_perc','$father_name','$father_aadhaar','$father_contact','$father_occupation','$father_income','$mother_name','$mother_aadhaar','$mother_contact','$mother_occupation','$mother_income')");

		if($insert)
		{
			echo "<script>document.getElementsByClassName('success')[0].style='visibility:visible;'</script>";

		}
	}
	else
	{
		echo "<script>document.getElementsByClassName('alert')[0].style='visibility:visible;'</script>";
	}
}
?>
</body>
</html>