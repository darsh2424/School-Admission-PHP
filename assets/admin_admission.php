<!DOCTYPE html>
<html lang="en">
<head>
<style>
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
        .data,.data tr{
            border:none;
        }
        .data .head td{
            background-color:grey;
            color:black;
            font-weight:bold;
            padding:12px 5px;
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
    <form method="get" id="form-filter" action="">
            <div class="text" style="margin-left:40%;margin-top:5%;position:absolute;">
                Select Any :
                <select name="filter" onchange="sub();">
                    <option value='0' disabled selected>--SELECT CLASS--</option>
                    <?php
                        for($i=1;$i<13;$i++)
                        {
                            $class='Class '.$i;
                            echo "<option value='$i'>$class</option>";
                        }
                    ?>
                </select>
            </div>
            <br><br><br><br><br><br>
    </form>

<?php
if(isset($_GET["filter"]))
{
    $filter=$_GET['filter'];
}



if($cn)
{
    if((!(isset($_GET["filter"]))) || $filter==0)
    {
        $result=mysqli_query($cn,"select * from admission_tb");       
    }
    if((isset($_GET["filter"])) && $filter>0)
    {
        $result=mysqli_query($cn,"select * from admission_tb where admission_class=$filter");
        if(mysqli_num_rows($result)==0)
        {
            echo "<div class='alert'>No admission data of class $filter!!</div>";
            exit();
        }
    }

    echo "<form method='post' action=''><table border='1' class='data'>";
    echo "<tr class='head'><td>Admission<br>No</td><td width='7%'>Admission<br>Request<br>Date</td><td>Student<br>Name</td><td>Student<br>Gender</td><td>Parent<br>Phone</td><td>Admission<br>Class</td><td>Admission<br>Year</td><td>Parent<br>Email</td><td>Student<br>Aadhaar</td><td>Previous<br>School</td><td>Previous<br>Class</td><td>Previous<br>class<br>Year</td><td>Previous<br>class<br>Percentage</td><td>Request</td></tr>";
    
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
        echo "<td>".$row['prev_school']."</td>";
        echo "<td>".$row['prev_class']."</td>";
        echo "<td>".$row['prev_study_year']."</td>";
        echo "<td>".$row['prev_class_perc']."</td>";
        if($admit_request=='No')
        {
            echo "<td><br><button name='accept' value='$admit_no'>$admit_request</button><br><br><a href='full_admission_dtl.php?sr_no=$admit_no' target='_top' style='font-size:14px;cursor:pointer;text-decoration:none;'>View Full Details!!</a></td>";
        }
        else
        {
            echo "<td> Accepted! </td>";           
        }

        echo "</tr>";
    }
    echo "</table></form>";

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