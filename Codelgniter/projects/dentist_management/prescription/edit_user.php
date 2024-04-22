<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["user_id"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE prescription set user_id='" . $_POST["user_id"][$i] . "', doc_id='" . $_POST["doc_id"][$i] . "', prescription='" . $_POST["prescription"][$i] . "', appo_date='" . $_POST["appo_date"][$i] . "',appo_time='" . $_POST["appo_time"][$i] . "', service_name='" . $_POST["service_name"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["prescription"])){
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
$rowCount = count($_POST["prescription"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM prescription WHERE id='" . $_POST["prescription"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>user_id</label></td>
<td><input type="number" name="user_id[]" class="txtField" value="<?php echo $row[$i]['user_id']; ?>"></td>
</tr>
<td><label>doc_id</label></td>
<td><input type="number" name="doc_id[]" class="txtField" value="<?php echo $row[$i]['doc_id']; ?>"></td>
</tr>
<td><label>prescription</label></td>
<td><input type="text" name="prescription[]" class="txtField" value="<?php echo $row[$i]['prescription']; ?>"></td>
</tr>
<td><label>appo_date</label></td>
<td><input type="date" name="appo_date[]" class="txtField" value="<?php echo $row[$i]['appo_date']; ?>"></td>
</tr>
<td><label>appo_time</label></td>
<td><input type="time" name="appo_time[]" class="txtField" value="<?php echo $row[$i]['appo_time']; ?>"></td>
</tr>
<td><label>service_name</label></td>
<td><input type="text" name="service_name[]" class="txtField" value="<?php echo $row[$i]['service_name']; ?>"></td>
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