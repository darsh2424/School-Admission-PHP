<?php
require 'session.php';
if(empty($_SESSION['auth']))
{
    if($_SESSION['auth']!='admin')
	header("location:http://localhost/project/assets/login.php");
}
?>
<html>
<head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        div{
            border:1px solid black;
        }
        .navbar{
            width:15%;
            height:720px;
            float:left;
            background-color:#C7C7C7;
        }
        .navbar ul li{
            list-style-type:none;
        }
        .navbar ul li a{
            font-size:1.5rem;
            display:block;
            text-align:center;
            padding:75px 0px;
            color:black;
            text-decoration:none;
        }
        .navbar ul li a:hover{
            background-color:#A3A3A3;
        }
        .content{
            margin-left:15%;
            height:720px;
            width:85%;
            height:auto;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="navbar">
        <ul>
            <li><a href="admin_inquiry.php" target="content-display">INQUIRY</a></li>
            <li><a href="admin_admission.php" target="content-display">ADMISSION</a></li>
            <li><a href="admin_help.php" target="content-display">HELP-DESK</a></li>
            <li><a href="admin_eligible.php" target="content-display">ELIGIBLE</a></li>
        </ul>
    </div>
    <div class="content">
        <iframe src="admin_inquiry.php" name="content-display" width="99%" height="720"></iframe>
    </div>
</div>
</body>
</html>