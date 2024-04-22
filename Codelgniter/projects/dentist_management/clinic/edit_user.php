<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["dentist_id"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE clinic set dentist_id='" . $_POST["dentist_id"][$i] . "', clinic_name='" . $_POST["clinic_name"][$i] . "', address='" . $_POST["address"][$i] . "', phone='" . $_POST["phone"][$i] . "',more_info='" . $_POST["more_info"][$i] . "', clinic_hours='" . $_POST["clinic_hours"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["clinic"])){
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
$rowCount = count($_POST["clinic"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM clinic WHERE id='" . $_POST["clinic"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>dentist_id</label></td>
<td><input type="number" name="dentist_id[]" class="txtField" value="<?php echo $row[$i]['dentist_id']; ?>"></td>
</tr>
<td><label>clinic_name</label></td>
<td><input type="text" name="clinic_name[]" class="txtField" value="<?php echo $row[$i]['clinic_name']; ?>"></td>
</tr>
<td><label>address</label></td>
<td><input type="text" name="address[]" class="txtField" value="<?php echo $row[$i]['address']; ?>"></td>
</tr>
<td><label>phone</label></td>
<td><input type="number" name="phone[]" class="txtField" value="<?php echo $row[$i]['phone']; ?>"></td>
</tr>
<td><label>more_info</label></td>
<td><input type="text" name="more_info[]" class="txtField" value="<?php echo $row[$i]['more_info']; ?>"></td>
</tr>
<td><label>clinic_hours</label></td>
<td><input type="time" name="clinic_hours[]" class="txtField" value="<?php echo $row[$i]['clinic_hours']; ?>"></td>
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