<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["fname"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE users set fname='" . $_POST["fname"][$i] . "', lname='" . $_POST["lname"][$i] . "', email='" . $_POST["email"][$i] . "', password='" . $_POST["password"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["users"])){
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
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_POST["users"][$i] . "'");
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
<td><label>email</label></td>
<td><input type="email" name="email[]" class="txtField" value="<?php echo $row[$i]['email']; ?>"></td>
</tr>
<td><label>password</label></td>
<td><input type="password" name="password[]" class="txtField" value="<?php echo $row[$i]['password']; ?>"></td>
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