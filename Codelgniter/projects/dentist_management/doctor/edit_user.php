<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["fname"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE doctor set 
fname='" . $_POST["fname"][$i] . "', 
lname='" . $_POST["lname"][$i] . "', 
reg_no='" . $_POST["reg_no"][$i] . "', 
email='" . $_POST["email"][$i] . "',
phone='" . $_POST["phone"][$i] . "', 
gender='" . $_POST["gender"][$i] . "', 
city='" . $_POST["city"][$i] . "', 
state='" . $_POST["state"][$i] . "', 
pin='" . $_POST["pin"][$i] . "', 
country='" . $_POST["country"][$i] . "', 
address='" . $_POST["address"][$i] . "', 
clinic_name='" . $_POST["clinic_name"][$i] . "', 
department='" . $_POST["department"][$i] . "', 
more_info='" . $_POST["more_info"][$i] . "', 
password='" . $_POST["password"][$i] . "', 
date='" . $_POST["date"][$i] . "', 
`check`='" . $_POST["check"][$i] . "' 
WHERE id='" . $_POST["id"][$i] . "'");
}
header("refresh:1; url=list_user.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
</head>
<body>
<?php
if (!isset($_POST["doctor"])){
	if ($result){
		echo "Successfully Updated";
	}else{
		echo "Sorry did not Update";
	}
}else {
?>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["doctor"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM doctor WHERE id='" . $_POST["doctor"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>fname</label></td>
<td><input type="text" name="fname[]" class="txtField" value="<?php echo $row[$i]['fname']; ?>"></td>
</tr>
<td><label>lname</label></td>
<td><input type="text" name="lname[]" class="txtField" value="<?php echo $row[$i]['lname']; ?>"></td>
</tr>
<td><label>reg_no</label></td>
<td><input type="number" name="reg_no[]" class="txtField" value="<?php echo $row[$i]['reg_no']; ?>"></td>
</tr>
<td><label>email</label></td>
<td><input type="email" name="email[]" class="txtField" value="<?php echo $row[$i]['email']; ?>"></td>
</tr>
<td><label>phone</label></td>
<td><input type="number" name="phone[]" class="txtField" value="<?php echo $row[$i]['phone']; ?>"></td>
</tr>
<td><label>gender</label></td>
<td><input type="text" name="gender[]" class="txtField" value="<?php echo $row[$i]['gender']; ?>"></td>
</tr>
<td><label>city</label></td>
<td><input type="text" name="city[]" class="txtField" value="<?php echo $row[$i]['city']; ?>"></td>
</tr>
<td><label>state</label></td>
<td><input type="text" name="state[]" class="txtField" value="<?php echo $row[$i]['state']; ?>"></td>
</tr>
<td><label>pin</label></td>
<td><input type="number" name="pin[]" class="txtField" value="<?php echo $row[$i]['pin']; ?>"></td>
</tr>
<td><label>country</label></td>
<td><input type="text" name="country[]" class="txtField" value="<?php echo $row[$i]['country']; ?>"></td>
</tr>
<td><label>address</label></td>
<td><input type="text" name="address[]" class="txtField" value="<?php echo $row[$i]['address']; ?>"></td>
</tr>
<td><label>clinic_name</label></td>
<td><input type="text" name="clinic_name[]" class="txtField" value="<?php echo $row[$i]['clinic_name']; ?>"></td>
</tr>
<td><label>department</label></td>
<td><input type="text" name="department[]" class="txtField" value="<?php echo $row[$i]['department']; ?>"></td>
</tr>
<td><label>more_info</label></td>
<td><input type="text" name="more_info[]" class="txtField" value="<?php echo $row[$i]['more_info']; ?>"></td>
</tr>
<td><label>password</label></td>
<td><input type="password" name="password[]" class="txtField" value="<?php echo $row[$i]['password']; ?>"></td>
</tr>
<td><label>date</label></td>
<td><input type="date" name="date[]" class="txtField" value="<?php echo $row[$i]['date']; ?>"></td>
</tr>
<td><label>check</label></td>
<td><input type="text" name="check[]" class="txtField" value="<?php echo $row[$i]['check']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<?php
}
?>
</body></html>