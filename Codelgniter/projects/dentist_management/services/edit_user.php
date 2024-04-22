<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["category"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE services set category='" . $_POST["category"][$i] . "', time='" . $_POST["time"][$i] . "', description='" . $_POST["description"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["services"])){
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
$rowCount = count($_POST["services"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM services WHERE id='" . $_POST["services"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>category</label></td>
<td><input type="text" name="category[]" class="txtField" value="<?php echo $row[$i]['category']; ?>"></td>
</tr>
<td><label>time</label></td>
<td><input type="time" name="time[]" class="txtField" value="<?php echo $row[$i]['time']; ?>"></td>
</tr>
<td><label>description</label></td>
<td><input type="text" name="description[]" class="txtField" value="<?php echo $row[$i]['description']; ?>"></td>
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