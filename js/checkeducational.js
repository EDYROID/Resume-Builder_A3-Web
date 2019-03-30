// JavaScript Document

function checkEducational(form)
{
	if(form.t1.value == "") {
		alert("School Name must be filled!");
		form.t1.focus();
		return false;
	}
	if(form.t2.value == "") {
		alert("School Location must be filled!");
		form.t2.focus();
		return false;
	}
	if(form.t3.value == "") {
		alert("Degree or Class must be filled!");
		form.t3.focus();
		return false;
	}
	if(form.t4.value == "") {
		alert("Field of Study must be filled!");
		form.t4.focus();
		return false;
	}
	if(form.t5.value == "") {
		alert("University of Board Name must be filled!");
		form.t5.focus();
		return false;
	}
	if(form.t6.value == "") {
		alert("Year of Passing must be filled!");
		form.t6.focus();
		return false;
	}	
	if(form.t7.value == "") {
		alert("Aggregate Percentage % must be filled!");
		form.t7.focus();
		return false;
	}
	re = /^[\.\,a-zA-Z ]*$/;
    if(!re.test(form.t1.value)) {
    	alert("School Name must have only letters with spacing!");
        form.t1.focus();
        return false;
    }
	re = /(^100(\.0{1,2})?$)|(^([1-9]([0-9])?|0)(\.[0-9]{1,2})?$)/;
	if(!re.test(form.t7.value)) {
        alert("Percentage must have Valid Format!");
        form.t7.focus();
        return false;
    }
	
	return true;
}