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
            padding:7px;
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
<br><br><br>
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
$cn=mysqli_connect("localhost","root","","school_users");
if($cn)
{
    if((!(isset($_GET["filter"]))) || $filter==0)
    {
        $result=mysqli_query($cn,"select * from admission_final");       
    }
    if((isset($_GET["filter"])) && $filter>0)
    {
        $result=mysqli_query($cn,"select * from admission_final where stud_admit_class=$filter");
        if(mysqli_num_rows($result)==0)
        {
            echo "<div class='alert'>No admission data of class $filter!!</div>";
            exit();
        }
    }

    echo "<table border='1' class='data'>";
    echo "<tr class='head'><td>Admission<br>No</td><td>Student<br>Name</td><td>Student<br>Gender</td><td>Student<br>Aadhaar</td><td>Admission<br>Class</td><td>Admission<br>Year</td><td>Parent<br>Phone</td><td>Parent<br>Email</td><td width='7%'>Request<br>Date</td><td width='7%'>Acceptance<br>Date</td></tr>";

    foreach ($result as $row){
        echo "<tr>";
        echo "<td>".$row['admit_no']."</td>";
        echo "<td>".$row['stud_name']."</td>";
        echo "<td>".$row['stud_gender']."</td>";
        echo "<td>".$row['stud_aadhaar']."</td>";
        echo "<td>".$row['stud_admit_class']."</td>";
        echo "<td>".$row['stud_admit_year']."</td>";
        echo "<td>".$row['parent_phone']."</td>";
        echo "<td>".$row['parent_email']."</td>";
        echo "<td>".$row['req_date']."</td>";
        echo "<td>".$row['accept_date']."</td>";
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