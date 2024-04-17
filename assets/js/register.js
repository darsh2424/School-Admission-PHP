

	function validate()
	{
		var username=check_username();
		var email=check_email();	
		var password=check_password();
		var confirmpassword=confirm_password();
		
		if(username==true && email==true && password==true && confirmpassword==true)
		{
			alert("Well done!! You Have Entered Valid Data! Click Register Button");
			 document.frm.submit.disabled=false;
		}

	}
	function submitbtn()
	{

		 document.frm.submit.disabled=true;

	}
	function check_username()
	{
		var txt_username=window.document.frm.username.value;
		txt_username=txt_username.toUpperCase();
		
		if(txt_username.length<5)
		{
			document.frm.username.style.border="3px solid red";
			alert("Username must contain minimum 5 characters");
			
		}
		else
		{
			var cnt_digit=0,cnt_alpha=0;
			for(var i=0;i<txt_username.length;i++)
			{
				var char=txt_username.charAt(i);
				if(char>=0 && char<=9)
				{
					cnt_digit++;
				}
				if(char>="A" && char<="Z")
				{
					cnt_alpha++;
				}
			}
			if(cnt_digit==0 || cnt_alpha==0)
			{
				document.frm.username.style.border="3px solid red";
				alert("Username must contain minimum 1 digit and 1 alphabet");
				
			}
			else
			{
				document.frm.username.style.border="1px solid black";
				return true;
			}
		}
	}
	function check_email()
	{
		var txt_email=document.frm.email.value;
		var check=txt_email.indexOf("@gmail.com");
		var duplicate=txt_email.indexOf("@gmail.com",check+1);
		if(check==-1)
		{
			document.frm.email.style.border="3px solid red";
			
			alert("Invalid Email. Must contain @gmail.com");

		}
		else if(duplicate>=0)
		{
			document.frm.email.style.border="3px solid red";
			
			alert("Invalid Email. You entered @gmail.com multiple times!!");

		}
			
		else
		{
			var cnt=0;
			txt_email=txt_email.toUpperCase();
			for(var i=0;i<check;i++)
			{
				var char=txt_email.charAt(i);
				if(	(char>=0 && char<=9) || (char>="A" && char<="Z") || char=="_" 	)
				{
					cnt++;
				}
			
			}

			if(cnt!=check)
			{
				document.frm.email.style.border="3px solid red";
				
				alert("Invalid Email. Must Contain Only digit,alphabets,underscores");

			}
			else
			{
				document.frm.email.style.border="1px solid black";
				return true;
			}


		}
	}
	function check_password()
	{
		var txt_password=window.document.frm.password.value;
		txt_password=txt_password.toUpperCase();
		
		if(txt_password.length<5)
		{
			document.frm.password.style.border="3px solid red";
			alert("Password must contain minimum 5 characters");
			
		}
		else
		{
			var cnt_digit=0,cnt_alpha=0;
			for(var i=0;i<txt_password.length;i++)
			{
				var char=txt_password.charAt(i);
				if(char>=0 && char<=9)
				{
					cnt_digit++;
				}
				if(char>="A" && char<="Z")
				{
					cnt_alpha++;
				}
			}
			if(cnt_digit==0 || cnt_alpha==0 || cnt_digit==txt_password.length || cnt_alpha==txt_password.length)
			{
				document.frm.password.style.border="3px solid red";
				alert("Password must contain minimum 1 digit and 1 alphabet");
				
			}
			else
			{
				document.frm.password.style.border="1px solid black";
				return true;
			}

		}
	}
	function confirm_password()
	{
		var txt_password=window.document.frm.password.value;
		var txt_confirmpassword=window.document.frm.confirmpassword.value;
			
		if(txt_password!=txt_confirmpassword || txt_confirmpassword.length==0)
		{
			document.frm.password.style.border="3px solid red";
			document.frm.confirmpassword.style.border="3px solid red";
			alert("Please Check Both Passwords, They must be same and not null");
			
		}
		else
		{
			document.frm.confirmpassword.style.border="1px solid black";
			return true;
		}

	}

