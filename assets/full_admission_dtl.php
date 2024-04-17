<!DOCTYPE html>
<html lang="en">
<head>
<style>
    *{
        margin-left:50px;
    }
        .alert{
            width:90%;
            height:300;
            padding:20px;
            background-color:red;
            color:white;
            transition: opacity 0.6s;
            margin-bottom: 15px;
            animation-name:alert;
            animation-duration:3s;
        }
        @keyframes alert {
            0%{opacity: 0;};
            100%{opacity: 1;};
        }
        .closebtn {
        margin-left: 10px;
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
        .data{
            width:80%;
            border-spacing:5px;
            margin-top:5px;
        }
        /* h2{
            padding:5px;
        } */
        .data,.data tr{
            border:none;
        }
        .data .head td{
            background-color:grey;
            color:black;
            font-weight:bold;
            /* padding:12px 5px; */
            text-align:center;
            /* border:none; */
        }
        .data td{
           text-align:center;
           padding:12px 2px; 
           border:none;
           /* border-right:2px solid black; */
           box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
    <script>
        function sub()
        {
            document.getElementById("form-filter").submit();
        }
    </script>
</head>
<body>
<?php
$cn=mysqli_connect("localhost","root","","school_users");
    if(isset($_POST['accept']))
    {
        $accept=$_POST['accept'];

        $update_result=mysqli_query($cn,"select * from admission_tb where sr_no='$accept'");
        $change=mysqli_fetch_assoc($update_result);
        
        $stud_name=$change['stud_name'];
        $stud_gender=$change['stud_gender'];
        $stud_class=$change['admission_class'];
        $stud_academic_year=$change['admission_year'];
        $stud_aadhaar=$change['stud_aadhaar'];
        $stud_parent_phone=$change['parent_phone'];
        $email=$change['parent_email'];
        $admit_date=$change['admit_date'];
        $accept_admit_date=date('Y-m-d');

        $insert_final=mysqli_query($cn,"INSERT INTO admission_final(stud_name, stud_gender, stud_aadhaar, stud_admit_class, stud_admit_year, parent_phone, parent_email, req_date, accept_date) VALUES ('$stud_name','$stud_gender','$stud_aadhaar','$stud_class','$stud_academic_year','$stud_parent_phone','$email','$admit_date','$accept_admit_date')");

        if($insert_final)
        {
            $update=mysqli_query($cn,"update admission_tb set admit_request='Yes' where sr_no=$accept");
            if($update)
            {
                echo "<div class='alert success' style='background-color:green;'><span class='closebtn'>&times;</span>Request Accepted!!</div>";
            }
        }

    }
?>

<br>
<?php
if(isset($_GET["sr_no"]) && $cn)
{
    $admit_no=$_GET['sr_no'];
    $result=mysqli_query($cn,"select * from admission_tb where sr_no=$admit_no");


    echo "<form method='post' action=''>";
    
    echo "<h2>Student's Data</h2>";
    echo "<table border='1' class='data'>";
    echo "<tr class='head'><td>Admission<br>No</td><td width='7%'>Admission<br>Request<br>Date</td><td>Student<br>Name</td><td>Student<br>Gender</td><td>Parent<br>Phone</td><td>Admission<br>Class</td><td>Admission<br>Year</td><td>Parent<br>Email</td><td>Student<br>Aadhaar</td></tr>";
    
    foreach ($result as $row){
        $admit_no=$row['sr_no'];
        $admit_request=$row['admit_request'];
        echo "<tr>";
        echo "<td>".$row['sr_no']."</td>";
        echo "<td>".$row['admit_date']."</td>";
        echo "<td>".$row['stud_name']."</td>";
        echo "<td>".$row['stud_gender']."</td>";
        echo "<td>".$row['parent_phone']."</td>";
        echo "<td>".$row['admission_class']."</td>";
        echo "<td>".$row['admission_year']."</td>";
        echo "<td>".$row['parent_email']."</td>";
        echo "<td>".$row['stud_aadhaar']."</td>";
        echo "</tr>";
    }
    echo "</table>";


    echo "<h2>Student's Previous Study Data</h2>";
    echo "<table class='data'>";
    echo "<tr class='head'><td>Previous School</td><td>Previous<br>Class</td><td>Previous<br>class<br>Year</td><td>Previous<br>class<br>Percentage</td></tr>";
    foreach ($result as $row){
        $admit_no=$row['sr_no'];
        $admit_request=$row['admit_request'];
        echo "<tr>";
        echo "<td>".$row['prev_school']."</td>";
        echo "<td>".$row['prev_class']."</td>";
        echo "<td>".$row['prev_study_year']."</td>";
        echo "<td>".$row['prev_class_perc']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Student's Parents Data</h2>";
    echo "<table class='data'>";
    echo "<tr class='head'><td>Father's <br> Name</td><td>Father's<br>Contact</td><td>Father's<br>Occupation</td><td>Father's<br>Income</td><td>Mother's <br> Name</td><td>Mother's<br>Contact</td><td>Mother's<br>Occupation</td><td>Mother's<br>Income</td></tr>";
    foreach ($result as $row){
        $admit_no=$row['sr_no'];
        $admit_request=$row['admit_request'];
        echo "<tr>";
        echo "<td>".$row['father_name']."</td>";
        echo "<td>".$row['father_contact']."</td>";
        echo "<td>".$row['father_occupation']."</td>";
        echo "<td>".$row['father_income']."</td>";
        echo "<td>".$row['mother_name']."</td>";
        echo "<td>".$row['mother_contact']."</td>";
        echo "<td>".$row['mother_occupation']."</td>";
        echo "<td>".$row['mother_income']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<div style='margin-left:75%;margin-top:50px;'>";
    if($admit_request=='No')
    {
        echo "<td><label style='background-color:#C7C7C7;padding:13px;color:black;'>Request : </label><button name='accept' value='$admit_no' style='padding:14px;margin-left:-10px;font-weight:bold;cursor:pointer;'>$admit_request</button></td>";
    }
    else
    {
        echo "<td><label style='background-color:#C7C7C7;padding:13px;color:black;'>Request : </label><label style='padding:13px;color:black;margin-left:-10px;'>Accepted! </label></td>";           
    }
    echo "</div>";
    echo "</form>";
}    
else
{
    echo "<div class='alert'><span class='closebtn'>&times;</span>Server Not Responding!!</div>";
}
?>

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
</body>
</html>