// JavaScript Document

function checkPersonal(form)
{
	if(form.t1.value == "") {
		alert("Name must be filled!");
		form.t1.focus();
		return false;
	}
	if(form.t2.value == "") {
		alert("Email ID must be filled!");
		form.t2.focus();
		return false;
	}
	if(form.t3.value == "") {
		alert("Contact Number must be filled!");
		form.t3.focus();
		return false;
	}
	if(form.t4.value == "") {
		alert("Street Address must be filled!");
		form.t4.focus();
		return false;
	}
	if(form.t5.value == "") {
		alert("City Name must be filled!");
		form.t5.focus();
		return false;
	}
	if(form.t6.value == "") {
		alert("State Name must be filled!");
		form.t6.focus();
		return false;
	}	
	if(form.t7.value == "") {
		alert("ZIP Code must be filled!");
		form.t7.focus();
		return false;
	}
	re = /^[a-zA-Z ]*$/;
    if(!re.test(form.t1.value)) {
    	alert("Name must have only letters with spacing!");
        form.t1.focus();
        return false;
    }
	re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!re.test(form.t2.value)) {
        alert("Email ID must be Valid!");
        form.t2.focus();
        return false;
    }
	
	return true;
}