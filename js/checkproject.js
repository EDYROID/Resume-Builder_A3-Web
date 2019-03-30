// JavaScript Document

function checkProject(form)
{
	if(form.t1.value == "") {
		alert("Project Name must be filled!");
		form.t1.focus();
		return false;
	}
	if(form.t2.value == "") {
		alert("Technologies must be filled!");
		form.t2.focus();
		return false;
	}
	if(form.t3.value == "") {
		alert("Your Role must be filled!");
		form.t3.focus();
		return false;
	}
	if(form.t4.value == "") {
		alert("Year must be filled!");
		form.t4.focus();
		return false;
	}
	if(form.t5.value == "") {
		alert("Description about Porject must be filled!");
		form.t5.focus();
		return false;
	}
	re = /^[a-zA-Z ]*$/;
    if(!re.test(form.t1.value)) {
    	alert("Project Name must have only letters with spacing!");
        form.t1.focus();
        return false;
    }
	re = /^[a-zA-Z ]*$/;
    if(!re.test(form.t3.value)) {
    	alert("Role Field must have only letters with spacing!");
        form.t3.focus();
        return false;
    }
	
	return true;
}