var names = document.getElementById("name");
var uname = document.getElementById("uname");
var pass = document.getElementById("pass");
var conpass=document.getElementById("conpass")
var email = document.getElementById("email");

var male = document.getElementById("male");
var female = document.getElementById("female");
var dob = document.getElementById("birthday");







function validate(){
	      refresh();
		  var hasError=false;
		  
		  
		  if(names.value===""){
			  document.getElementById("err_name").innerHTML = "Name Required!";
			  document.getElementById("err_name").style.color = #FF0000;
			  hasError = true;
		  }
		  
		  if(dob.value===""){
			  Document.getElementById("err_birthday").innerHTML ="Date of Birth Required";
			  document.getElementById("err_birthday").style.color = #FF0000;
			  hasError = true;
		  }
		  
		  
		  
		  if(uname.value===""){
			  document.getElementById("err_uname").innerHTML = "Username Required!";
			  document.getElementById("err_uname").style.color = #FF0000;
			  hasError = true;
		  }
		  else if (uname.value.length < 6) {
              document.getElementById("err_uname").innerHTML = "Username must be at least 6 letters";
			  document.getElementById("err_uname").style.color = #FF0000;
              hasError = true;
		  } 
		 
		  

		  if(pass.value ===""){
			  document.getElementById("err_pass").innerHTML = "Password Required!";
			  document.getElementById("err_pass").style.color = #FF0000;
			  hasError = true;
		  }
		  else if (pass.value.length < 8) {
			  document.getElementById("err_pass").innerHTML = "Password must be more than 8 characters";
			  document.getElementById("err_pass").style.color = #FF0000;
			  hasError = true;
		  } 
		 
		  
		  
		  if(conpass.value ===""){
			  document.getElementById("err_conpass").innerHTML = " Confirm Your Password!";
			  document.getElementById("err_conpass").style.color = #FF0000;
			  hasError = true;
		  }
		  
		  
		  if(email.value ===""){
			  document.getElementById("err_email").innerHTML = "Email Required!";
			  document.getElementById("err_email").style.color = #FF0000;
			  hasError = true;
		  }
		  
		  if (male.checked) {
            hasError = false;
		  }
		  else if (female.checked) {
			hasError = false;
		  }
		  else {
			document.getElementById("err_gender").innerHTML = "Gender is required!";
			document.getElementById("err_gender").style.color = #FF0000;
			hasError = true;
		  }
		  
		  return !hasError;
	  }

	  



function refresh() 
{
		  document.getElementById("err_name").innerHTML = "";
		  document.getElementById("err_uname").innerHTML = "";
		  document.getElementById("err_pass").innerHTML = "";
		  document.getElementById("err_conpass").innerHTML = "";
		  document.getElementById("err_email").innerHTML = "";
		  document.getElementById("err_number").innerHTML = "";
		  document.getElementById("err_gender").innerHTML = "";
		  document.getElementById("err_birthday").innerHTML = "";
		 


}
