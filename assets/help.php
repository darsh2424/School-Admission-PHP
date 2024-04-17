<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #data{
            margin-top:5%;
            margin-left:35%;
            border-spacing:10px;
        }
        #data td{
            font-size:1.5rem;
        }
        #data td input[type='text'],#data td input[type='email']{
            border-radius:10px;
            width:400px;
        }
        textarea{
            border-radius:10px;
        }
        #data td input[type='submit']{
            border-radius:10px;
            padding:15px;
            color:white;
            font-weight:bold;
            font-size:15px;
            background-color:green;
        }
        #data td input[type='submit']:hover{
            background-color:red;
            cursor:pointer;
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
        
        .alert .success {background-color: #04AA6D;}


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
</head>
<body>
    <?php
        if(isset($_POST['sub']))
        {
            $email=$_POST['email'];
            $name=$_POST['name'];
            $msg=$_POST['msg'];
            $date=date('Y-m-d');
            $cn=mysqli_connect("localhost","root","","school_users");

            if($cn)
            {
                $result=mysqli_query($cn,"insert into contact(email, name, message, date) values('$email','$name','$msg','$date')");
                if($result)
                {
                    echo "<div class='alert success' style='background-color:green;'><span class='closebtn'>&times;</span><strong>Success!</strong> <span id='msg'>Query Submitted!! </span></div>";
                }
            }
        }
    ?> 
    <form method="post" action="">
    <table id="data">
        <th><h2>In Case Of Problem Contact Us -- </h2></th>
        <tr>
            <td>Email</td>
        </tr>
        <tr>
            <td><input type="email"  name="email" placeholder="Enter Your Email" required></td>
        </tr>
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td><input type="text" name="name" placeholder="Enter Your Name" required></td>
        </tr>
        <tr>
            <td>Message</td>
        </tr>
        <tr>
            <td>
                <textarea name="msg" rows="5" cols="50" placeholder="State Your Problem here..." required></textarea>
            </td>
        </tr>
        <tr>
            <td align="right"><input type="submit" value="SUBMIT" name="sub"></td>
        </tr>
    </table>
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
</body>
</html>