// JavaScript Document
function validate()
{
	var x = document.forms['myform']['t1'];
	var y = document.forms['myform']['t2'];
	var z = document.forms['myform']['t3'];
	var w = document.forms['myform']['t4'];
	var regexp1 = new RegExp("[^0-9]");
	if((x.value == "") || (x.value == null))
	{
		window.alert("Name must be filled out");
		x.focus();
		return false;
	}
	if((y.value == "") || (y.value == null))
	{
		window.alert("Email ID must be filled out");
		y.focus();
		return false;
	}
	if((z.value == "") || (z.value == null))
	{
		window.alert("Password must be filled out");
		z.focus();
		return false;
	}
	if((w.value == "") || (w.value == null))
	{
		window.alert("Password must be re-entered");
		w.focus();
		return false;
	}
	return true;
}
