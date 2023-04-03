// JavaScript Document


function registervalidate()
{ 
var username = document.form_registeration.fullname.value;
var email = document.form_registeration.email.value;
var password = document.form_registeration.pass.value;
var confirmPassword = document.form_registeration.repass.value;
var gender = document.form_registeration.gender.value;
var userType = document.form_registeration.user_type.value;
var city = document.form_registeration.city.value;
var country = document.form_registeration.country.value;
var pincode = document.form_registeration.pincode.value;
var agree = document.form_registeration.agree.checked;

	// var agree = document.querySelector('[name="emp_agree"]:checked');
	var btn_register = document.form_empjoinus.emp_btn_register;

	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers = /^[0-9]+$/;
	var alphanumeric = /^[a-zA-Z][0-9]$/;
	var alphabets = /^[a-zA-Z]+$/;

		// Validate specified fields
		if (username.length === 0 || email.length === 0 || password.length === 0 || confirmPassword.length === 0 || gender.length === 0 ||
			userType.length === 0 || city.length === 0 || country.length === 0 || pincode.length === 0) {
			alert("All * fields are required");
			return false;
		}
		
		if (!email.match(/^\S+@\S+\.\S+$/)) {
			alert("You have entered an invalid email address");
			document.form_registeration.email.focus();
			return false;
		}
	
		if (password.length < 8 || password.length > 24) {
			alert("Password must be between 8 and 24 characters");
			document.form_registeration.pass.focus();
			return false;
		}
	
		if (password !== confirmPassword) {
			alert("Passwords do not match");
			document.form_registeration.repass.focus();
			return false;
		}
	
		if (pincode.length !== 6 || !pincode.match(/^\d+$/)) {
			alert("Pin-Code must be a 6-digit number");
			document.form_registeration.pincode.focus();
			return false;
		}
	
		if (!agree) {
			alert("Please accept our agreement");
			document.form_registeration.agree.focus();
			return false;
		}
	
		// If all validations pass, return true
		return true;
	}
		
// 			if(username.value.length != 0 && email.value.length != 0 && password.value.length != 0 && repass.value.length != 0	&& 
// 				company_name.value.length != 0 && company_type.checked != false && industry_type.value != -1 && gender.checked != false &&
// 				address.value.length != 0 && city.value.length != 0 && state.value.length != 0 && country.value.length != 0 && 
// 				pincode.value.length != 0 && mob.value.length != 0 && name.value.length != 0 && captcha.value.length != 0 )
// 			{	
// 				if(email.value.match(mailformat))
// 				{
// 					if(password.value.length >= 8 && password.value.length <= 24)
// 					{
// 						if(password.value.length == repass.value.length)
// 						{
// 							//Defining flag variable
// 							var flag = 1;
			
// 							for(i=0; i<password.value.length; i++)
// 							{
// 								if(password.value[i] != repass.value[i])
// 								{
// 									flag = 0;
// 									break;
// 								}
// 							}
					
// 							if(flag == 1)
// 							{
// 								if(pincode.value.match(numbers))
// 								{
// 									if(pincode.value.length == 6)
// 									{
// 										if(mob.value.match(numbers))
// 										{
// 											if(mob.value.length == 10)
// 											{
// 												if(captcha.value == hddn_captcha.value)
// 												{
// 													if(agree.checked == true)
// 													{
// 														document.getElementsByName("emp_btn_register")[0].style.display = "inline-block";
// 														flag = 1;
// 													}
													
// 													else
// 													{
// 														alert("Please accept our agreement");
// 														document.form_empjoinus.emp_agree.focus();
// 														return false;
// 													}
// 												}
												
// 												else
// 												{
// 													alert("Capcha is incorrect");
// 													document.form_empjoinus.emp_captcha.focus();
// 													return false;
// 												}
// 											}
											
// 											else
// 											{
// 												alert("Contact number must be of 10 digits");
// 												document.form_empjoinus.emp_phno.focus();
// 												return false;
// 											}
// 										}
										
// 										else
// 										{
// 											alert("Contact number must be in digits");
// 											document.form_empjoinus.emp_mob.focus();
// 											return false;
// 										}
// 									}
									
// 									else
// 									{
// 										alert("Pin-Code must be of 6 digits");
// 										document.form_empjoinus.emp_pincode.focus();
// 										return false;
// 									}
// 								}
								
// 								else
// 								{
// 									alert("Pin-Code must be in digits");
// 									document.form_empjoinus.emp_pincode.focus();
// 									return false;
// 								}
// 							}
							
// 							else
// 							{
// 								alert("Passwords do not match");
// 								document.form_empjoinus.emp_repass.focus();
// 								return false;
// 							}
// 						}
						
// 						else
// 						{
// 							alert("Password length does not matched");
// 							document.form_empjoinus.emp_repass.focus();
// 							return false;
// 						}				
// 					}
					
// 					else
// 					{
// 						alert("Password must be in between 8 & 24");
// 						document.form_empjoinus.emp_password.focus();
// 						return false;
// 					}
// 				}
				
// 				else 
// 				{
// 					alert("You have entered an invalid email address");
// 					document.form_empjoinus.emp_email.focus();
// 					return false;
// 				}
			
// 			}
			
// 			else 
// 			{
// 				alert("All * fields are required");
// 			}
			
		
// 	if(flag == 1 && btn_register.checked == true )
// 	{										
// 		alert("Form Succesfully Submitted");
// 		return true;
// 	}
// }

function LoadPage()
{
	var agree = document.form_empjoinus.emp_agree;
	var btn_register = document.getElementsByName("emp_btn_register");
	
	if(agree.checked == false)
	{
		document.getElementsByName("emp_btn_register")[0].style.display = "none";
	}
}
