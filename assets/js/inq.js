function inq_check()
{
  reset_change();
  var txt_fill_inq=check_txt_inq();
  if(!(txt_fill_inq==false))
  {
    var num_check_inq=check_num();
    if(!(num_check_inq==false))
    {
      var opt_check_inq=check_opt_inq();
      if(!(opt_check_inq==false))
      {
        document.getElementsByClassName("submit_tb")[0].style="z-index:2;position:absolute;background-color:white;margin-left:30%;margin-top:5%;"; 
      }
    }
  }
}
function reset_change()
{
  var data = document.getElementsByClassName("form-data");
  var i,cnt=0;

  for (i = 0; i < data.length; i++) 
  {
    document.getElementsByClassName("form-data")[i].style="border:2px black solid"; 
  } 
}

function check_txt_inq()
{
    var data = document.getElementsByClassName("form-data");
    var i,cnt=0;
    
    for (i = 0; i < data.length; i++) {
        var len=data[i].value.length;
        if(len==0)
        {
            document.getElementsByClassName("form-data")[i].style="border:3px red solid"; 
            cnt++;
        }
      }
      if(cnt>0)
      {
        document.getElementsByClassName("alert")[0].style="visibility:visible;";
        var alert_msg="Please Fill All Details!! You Have Not Submitted "+cnt+" Details";  
        document.getElementById("msg").innerHTML=alert_msg; 
        return false;
      }
}
function check_num()
{
  var data = document.getElementsByClassName("form-num");
  var i,cnt=0;
  
  for (i = 0; i < data.length; i++) {
      var num=Number(data[i].value);
      if(isNaN(num) || num==0)
      {
          document.getElementsByClassName("form-num")[i].style="border:3px red solid"; 
          cnt++;
      }
    }
    if(cnt>0)
    {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Enter Valid Data!!";  
      document.getElementById("msg").innerHTML=alert_msg; 
      return false;
    }
}
function check_opt_inq()
{
  if(window.document.admit.stud_gender[0].checked==false && window.document.admit.stud_gender[1].checked==false)
  {    
    document.getElementsByClassName("alert")[0].style="visibility:visible;";
    var alert_msg="Please Select Your Gender!!";  
    document.getElementById("msg").innerHTML=alert_msg;   
    return false;  
  }
  else if(window.document.admit.class.selectedIndex==0)
  {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Select Class In Which You Want To Get Admission!!";  
      document.getElementById("msg").innerHTML=alert_msg; 
      return false;
  }
  else if(window.document.admit.academic_year.selectedIndex==0)
  {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Select Academic Year !!";  
      document.getElementById("msg").innerHTML=alert_msg;
      return false; 
  }
  else if(window.document.admit.previous_class.selectedIndex==0)
  {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Select Previous Academic-Year Class !!";  
      document.getElementById("msg").innerHTML=alert_msg; 
      return false;
  }
  else if(window.document.admit.previous_class_year.selectedIndex==0)
  {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Select Previous Academic-Year!!";  
      document.getElementById("msg").innerHTML=alert_msg; 
      return false;
  }


}

