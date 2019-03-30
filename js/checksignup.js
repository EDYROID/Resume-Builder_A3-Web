// JavaScript Document

function checkSignupForm(form)
  {
	re = /^[a-zA-Z ]*$/;
      if(!re.test(form.t1.value)) {
        alert("Name must have only letters!");
        form.t1.focus();
        return false;
      }
	re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!re.test(form.t2.value)) {
        alert("Email ID must be Valid!");
        form.t2.focus();
        return false;
    }
    if(form.t3.value != "" && form.t3.value == form.t4.value) {
	  
      if(form.t3.value.length < 6) {
        alert("Password must contain at least six characters!");
        form.t3.focus();
        return false;
      }
      if(form.t3.value == form.t1.value) {
        alert("Password must be different from Username!");
        form.t3.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.t3.value)) {
        alert("Password must contain at least one number (0-9)!");
        form.t3.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.t3.value)) {
        alert("Password must contain at least one lowercase letter (a-z)!");
        form.t3.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.t3.value)) {
        alert("Password must contain at least one uppercase letter (A-Z)!");
        form.t3.focus();
        return false;
      }
    } else {
      alert("Password must be matched!");
      form.t3.focus();
      return false;
    }
	
    return true;
  }