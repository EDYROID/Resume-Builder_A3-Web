// JavaScript Document

function checkOthers(form)
{
	if(form.t1.value == "") {
		alert("Career Objective must be filled!");
		form.t1.focus();
		return false;
	}
	if(form.t2.value == "") {
		alert("Date must be filled!");
		form.t2.focus();
		return false;
	}
	if(form.t3.value == "") {
		alert("Month must be filled!");
		form.t3.focus();
		return false;
	}
	if(form.t4.value == "") {
		alert("Year must be filled!");
		form.t4.focus();
		return false;
	}
	if(form.t5.value == "") {
		alert("Language Proficiency must be filled!");
		form.t5.focus();
		return false;
	}
	if(form.t6.value == "") {
		alert("Hobbies must be filled!");
		form.t6.focus();
		return false;
	}
	
	return true;
}