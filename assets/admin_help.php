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
        .data{
            margin-left:5%;
            width:90%;
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

<?php


$cn=mysqli_connect("localhost","root","","school_users");
if(isset($_POST['accept']))
{
    $accept=$_POST['accept'];

    $update_result=mysqli_query($cn,"update contact set contacted='Yes' where sr_no='$accept'");
    
    if($update_result)
    {
        header('Refresh:0');
    }

}
if($cn)
{
    $result=mysqli_query($cn,"select * from contact");       
        if(mysqli_num_rows($result)==0)
        {
            echo "<div class='alert'>No Querys!!</div>";
            exit();
        }


    echo "<form method='post' action=''><table border='1' class='data'>";
    echo "<tr class='head'><td>Email</td><td>Name</td><td>Message</td><td>Query<br>Date</td><td>Contacted?</td></tr>";

    foreach ($result as $row){
        $query_no=$row['sr_no'];
        $query_request=$row['contacted'];
        echo "<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td width='60%' style='text-align:left;font-size:15px;'>".$row['message']."</td>";
        echo "<td>".$row['date']."</td>";
        if($query_request=='No')
        {
            echo "<td><button name='accept' value='$query_no'>$query_request</button></td>";
        }
        else
        {
            echo "<td> Yes </td>";           
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