
function check()
{
  reset_change();
  var txt_fill=check_txt();
    if(!(txt_fill==false))
    {
      var num_check=check_num();
      var pin_check=check_pin();
      if((!(num_check==false))&&(!(pin_check==false)))
      {
        var opt_check=check_opt();
        if(!(opt_check==false))
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
    document.getElementsByClassName("form-data")[i].style="border:1px black solid"; 
  } 
  document.admit.address.style="border:1px black solid";
}


function check_txt()
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
      var add=document.admit.address.value;
      var add_len=add.length;
      if(add_len==0)
      {
        document.admit.address.style="border:3px red solid";
        cnt++;
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
function check_pin()
{
  var pin=(document.admit.pin1.value)+(document.admit.pin2.value)+(document.admit.pin3.value)+(document.admit.pin4.value)+(document.admit.pin5.value)+(document.admit.pin6.value)
  var pin_num=Number(pin);
  if(isNaN(pin_num) || pin_num==0)
  {
    for(var i=0;i<6;i++)
    {
      document.getElementsByClassName("pincode")[i].style="border:3px red solid";      
    }
    document.getElementsByClassName("alert")[0].style="visibility:visible;";
    var alert_msg="Please Enter Valid Data!!";  
    document.getElementById("msg").innerHTML=alert_msg; 
    return false;    
  }
}


function check_opt()
{
  if(window.document.admit.stud_gender[0].checked==false &&window.document.admit.stud_gender[1].checked==false)
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
  else if(window.document.admit.bdate.value=="")
  {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Select Birth Date !!";  
      document.getElementById("msg").innerHTML=alert_msg; 
      return false;
  }
  else if(!(window.document.admit.bdate.value==""))
  {
    var bdate=new Date(window.document.admit.bdate.value);
    var bdate_year=bdate.getFullYear();


    var d = new Date();
    var curr_year=d.getFullYear();
    if(bdate_year==curr_year || bdate_year>curr_year || curr_year-bdate_year<5)
    {
      document.getElementsByClassName("alert")[0].style="visibility:visible;";
      var alert_msg="Please Check Birth Date !!";  
      document.getElementById("msg").innerHTML=alert_msg;
      return false;       
    }
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

