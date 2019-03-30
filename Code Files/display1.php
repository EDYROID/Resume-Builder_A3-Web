<?php 
include "connection.php";
$result1 = mysqli_query($con,"select * from personal where user_id = '1'");
$row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($con,"select * from educational where user_id = '1'");
$row2 = mysqli_fetch_array($result2);

$result4 = mysqli_query($con,"select * from technical where user_id = '1'");
$row4 = mysqli_fetch_array($result4);

$result5 = mysqli_query($con,"select * from otherinfo where user_id = '1'");
$row5 = mysqli_fetch_array($result5);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Preview</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<style>
/*body {
   size: 7in 9.25in;
   margin: 20px 300px 20px 300px;
}
*/
body {
  background: rgb(204,204,204); font-family:"Times New Roman", Times, serif;
}
.name { font-size:19px; font-weight:bold; line-height:10px; margin-left:40px; }
.upper { font-size:16px; margin-left:40px; line-height:10px; margin-right:40px; }
.career { font-size:16px; margin-left:40px; margin-right:40px; }
.headings { text-transform:uppercase; font-weight:bold; font-size:16px; border:1px black solid; font-style:italic;
	 margin-left:35px; margin-right:35px; }
.tablehead { font-size:16px; font-weight:bold; text-transform:uppercase; line-height:normal; text-align:center; border:1px black solid; }
.tablediv { font-size:16px; line-height:normal; text-align:center; border:1px black solid; }
.tabletech { font-size:16px; line-height:normal; }
.boton{ background:black; color:white; border:black 1px solid;border-radius:24px;font-size:18px;font-weight:bold;text-transform:uppercase; }
.boton:hover{ background:#82ccdd;color:black;border:white 1px solid;border-radius:24px; }
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
</head>

<body style="background:url(images/bg-01.jpg) center / cover;">
<page size="A4" id="printableArea">
<br /><br /><p class="name"><?php echo $row1['name']; ?></p>
<p class="upper"><?php echo $row2['degree']; ?>, <?php echo $row2['field']; ?></p>
<p class="upper"><?php echo $row2['sname']; ?>, <?php echo $row2['slocation']; ?></p>
<p class="upper">Contact No. : +91 - <?php echo $row1['contact']; ?></p>
<p class="upper">Email Address : <?php echo $row1['email']; ?></p>
<br />
<p class="headings">Career Objective</p>
<p class="career"><?php echo $row5['objective']; ?></p>
<p class="headings">Educational Qualification</p><br />
<table style="margin-left:32px; margin-right:32px;">
	<tr>
    	<th class="tablehead">
            Course/<br />Class
        </th>
        <th class="tablehead" style="padding:0px 10px 0px 10px;">
            Session
        </th>
        <th class="tablehead">
            University/<br />Board
        </th>
        <th class="tablehead">
            Institute
        </th>
        <th class="tablehead" style="padding:0px 10px 0px 10px;">
            Aggregate
        </th>
    </tr>
    <?php
	$result2 = mysqli_query($con,"select * from educational where user_id = '1'");
	while($row2 = mysqli_fetch_array($result2)){
	?>
    <tr>
    	<td class="tablediv">
            <?php echo $row2['degree']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row2['year']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row2['uniboard']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row2['sname']; ?>, <?php echo $row2['slocation']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row2['aggregate']; ?>
        </td>
    </tr>
    <?php } ?>
</table><br /><br />

<p class="headings">Projects</p><br />
<table style="margin-left:32px; margin-right:32px;">
	<tr>
    	<th class="tablehead" style="padding:0px 5px 0px 5px;">
            S.No.
        </th>
        <th class="tablehead" style="padding:0px 10px 0px 10px;">
            Project Name
        </th>
        <th class="tablehead">
            Technology
        </th>
        <th class="tablehead">
            Role
        </th>
        <th class="tablehead" style="padding:0px 10px 0px 10px;">
            Description
        </th>
        <th class="tablehead" style="padding:0px 10px 0px 10px;">
            Year
        </th>
    </tr>
    <?php
	$result3 = mysqli_query($con,"select * from projectinfo where user_id = '1'");
	$serial = 1;
	while($row3 = mysqli_fetch_array($result3)){
	?>
    <tr>
    	<td class="tablediv">
            <?php echo $serial; ?>.
        </td>
        <td class="tablediv">
            <?php echo $row3['pname']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row3['technology']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row3['role']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row3['description']; ?>
        </td>
        <td class="tablediv">
            <?php echo $row3['pyear']; ?>
        </td>
    </tr>
    <?php $serial++; } ?>
</table><br /><br />

<p class="headings">Technical Proficiency</p>
<br />
<table style="margin-left:85px; margin-right:50px;">
	<tr>
    	<td class="tabletech" style="padding-right:45px;">Operating Systems</td>
        <td class="tabletech" style="padding-right:60px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech" style="padding-right:100px;"><?php echo $row4['os']; ?></td>
    </tr>
    <tr>
    	<td class="tabletech" style="padding-right:45px;">Computer Languages</td>
        <td class="tabletech" style="padding-right:60px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech" style="padding-right:100px;"><?php echo $row4['language']; ?></td>
    </tr>
    <tr>
    	<td class="tabletech" style="padding-right:45px;">Databases Known</td>
        <td class="tabletech" style="padding-right:60px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech" style="padding-right:100px;"><?php echo $row4['known']; ?></td>
    </tr>
    <tr>
    	<td class="tabletech" style="padding-right:45px;">Technology</td>
        <td class="tabletech" style="padding-right:60px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech" style="padding-right:100px;"><?php echo $row4['technique']; ?></td>
    </tr>
</table><br /><br />

<p class="headings">Personal Details</p><br />
<table style="margin-left:85px; margin-right:100px;">
	<tr>
    	<td class="tabletech" style="padding-right:57px;">Permanent_Address</td>
        <td class="tabletech" style="padding-right:55px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech"><?php echo $row1['street']; ?>, <?php echo $row1['city']; ?>
        (<?php echo $row1['pincode']; ?>), <?php echo $row1['state']; ?></td>
    </tr>
    <tr>
    	<td class="tabletech" style="padding-right:57px;">Date of Birth</td>
        <td class="tabletech" style="padding-right:55px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech"><?php echo $row5['din']; ?> <?php echo $row5['mahina']; ?>, 
		<?php echo $row5['saal']; ?></td>
    </tr>
</table>
<table style="margin-left:85px; margin-right:100px;">
    <tr>
    	<td class="tabletech" style="padding-right:41px;">Language_Proficiency</td>
        <td class="tabletech" style="padding-right:55px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech"><?php echo $row5['lanpro']; ?></td>
    </tr>
    <tr>
    	<td class="tabletech" style="padding-right:41px;">Hobbies/Interest</td>
        <td class="tabletech" style="padding-right:55px;"></td>
        <td class="tabletech" style="padding-right:50px; font-weight:bold;">:</td>
        <td class="tabletech"><?php echo $row5['hobbies']; ?></td>
    </tr>
</table>
<br />
</page>
<div class="col-md-12" align="center">
	<input type="button" class="btn btn-default boton" onclick="printDiv('printableArea')" style="margin-bottom:20px;" value="Save Your Resume" />
</div>

<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>