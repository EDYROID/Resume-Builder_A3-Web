function validate()
{
	var x = document.forms["myForm"]["t1"];
	var y = document.forms["myForm"]["t2"];
	var z = document.forms["myForm"]["t3"];
	var w = document.forms["myForm"]["t4"];
	var regexp1 = new RegExp("[^0-9]");
	if((x.value == null) || (x.value == ""))
	{
		window.alert("Enter Your Name...");
		x.focus();
		return false;
	}
	if((y.value == null) || (y.value == ""))
	{
		window.alert("Enter Your Email ID...");
		y.focus();
		return false;
	}
	if(y.value.indexOf("@") == -1)
	{
		window.alert("Invalid Email ID...");
		y.focus();
		return false;
	}
	if(y.value.indexOf(".") == -1 || y.value.indexOf(".") == 0)
	{
		window.alert("Invalid Email ID...");
		y.focus();
		return false;
	}
	if((z.value == null) || (z.value == ""))
	{
		window.alert("Enter Your Password...");
		z.focus();
		return false;
	}
	if((w.value == null) || (w.value == ""))
	{
		window.alert("Re-enter Your Password...");
		w.focus();
		return false;
	}
	return true;
}